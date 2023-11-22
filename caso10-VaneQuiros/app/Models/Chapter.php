<?php

// Clase Chapter

public class Chapter
{
    private List<Paragraph> paragraphs;

    public Chapter()
    {
        this.paragraphs = new List<Paragraph>();
    }

    public void addParagraph(Paragraph paragraph)
    {
        this.paragraphs.Add(paragraph);
    }

    public List<Paragraph> getParagraphs()
    {
        return this.paragraphs;
    }
}
