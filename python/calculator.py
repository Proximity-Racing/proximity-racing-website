import sys
import csv

class Calculator:

    def __init__(self):
        self.irating = sys.argv[1]
        self.year = sys.argv[2]

    def calculate(self, curYeariRating, calcYeariRating):
        return int(int(self.irating) * float(curYeariRating) / float(calcYeariRating))


    def openFile(self):
        with open('../python/data/CombinedYearsAverage.csv') as file:
            csv_reader = csv.reader(file, delimiter=',')
            yearIndex = 0
            for index, row in enumerate(csv_reader):
                if index == 0:
                    if self.year in row:
                        yearIndex = row.index(self.year)
                elif index == 1:
                    print(self.calculate(row[-1], row[yearIndex]))


if __name__ == '__main__':
    calculator = Calculator()
    calculator.openFile()
