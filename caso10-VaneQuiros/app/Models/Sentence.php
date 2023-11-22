<?php


// Clase Sentence

public class Sentence
{
    private List<string> words;

    public Sentence()
    {
        this.words = new List<string>();
    }

    public void addWord(string word)
    {
        this.words.Add(word);
    }

    public List<string> getWords()
    {
        return this.words;
    }
}
