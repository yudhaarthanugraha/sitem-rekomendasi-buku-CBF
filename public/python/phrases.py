import sys
import json
import spacy

def detect_phrases(text):
    nlp = spacy.load("en_core_web_sm")
    doc = nlp(text)
    phrases = [chunk.text for chunk in doc.noun_chunks]
    return phrases

if __name__ == "__main__":
    input_text = sys.argv[1]
    phrases = detect_phrases(input_text)
    print(json.dumps(phrases))
