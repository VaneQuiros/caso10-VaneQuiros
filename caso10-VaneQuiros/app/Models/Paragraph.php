<?php


// Clase Paragraph

public class Paragraph
{
    private List<Sentence> sentences;

    public Paragraph()
    {
        this.sentences = new List<Sentence>();
    }

    public void addSentence(Sentence sentence)
    {
        this.sentences.Add(sentence);
    }

    public List<Sentence> getSentences()
    {
        return this.sentences;
    }
}
