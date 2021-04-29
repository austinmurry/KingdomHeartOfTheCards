from collections import Counter
import pygal
import spacy
#nlp = spacy.cli.download("en_core_web_sm")
nlp = spacy.load('en_core_web_sm')
lemmatizer = nlp.get_pipe("lemmatizer")
print(lemmatizer.mode)  # 'rule'

KHsp =open('attempt2_ALLGAMES_TEXT_temp_ebb.txt', 'r', encoding="utf8",errors='ignore')
speeches = KHsp.read()
KHspeeches = nlp(speeches)
print(KHspeeches)

def nouncollector(speeches):
    Nouns = []
    count = 0
    for token in speeches:
        if token.pos_ == "NOUN":
            count += 1
            Nouns.append(token.lemma_)
            print(count, ": ", token, token.pos_, spacy.explain(token.pos_))
    return Nouns

listNouns = nouncollector(KHspeeches)
print(listNouns)
noun_freq = Counter(listNouns)
topTen = noun_freq.most_common(10)
print(topTen)
lastTen = noun_freq.most_common()[:-5:-1]
print(lastTen)


bar_chartTopTen = pygal.Bar()
bar_chartTopTen.title = 'Top 10 Nouns in all 3 Kingdom Hearts'



for t in topTen:
    print(t[0], t[1])
    bar_chartTopTen.add(t[0], t[1])

print(bar_chartTopTen.render(is_unicode=True))

bar_chartTopTen.render_to_file('bar_chartTopTen.svg')

