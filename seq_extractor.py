file = open("sequence.fasta")

m = ""
for line in file:
  m = m + line.strip('\n').lower()

# print(m)

file.close()

file = open('new.txt', 'w+')

file.write(m)

file.close()
