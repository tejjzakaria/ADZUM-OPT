import numpy as np

class MultiArmedBandit:
    def __init__(self, arms):
        self.n = len(arms)
        self.values = np.zeros(self.n)
        self.counts = np.zeros(self.n)
    
    def select_arm(self):
        if np.random.rand() < 0.1:  # Exploration
            return np.random.randint(self.n)
        return np.argmax(self.values)  # Exploitation

    def update(self, arm, reward):
        self.counts[arm] += 1
        self.values[arm] += (reward - self.values[arm]) / self.counts[arm]

bandit = MultiArmedBandit(["18-25", "25-35", "35-45", "45+"])
chosen_audience = bandit.select_arm()
bandit.update(chosen_audience, reward=1.5)  # Update based on ROAS
