<?php

// Clase Book
namespace App\Models;


public class Book
{
    private List<Chapter> chapters;

    public Book()
    {
        this.chapters = new List<Chapter>();
    }

    public void addChapter(Chapter chapter)
    {
        this.chapters.Add(chapter);
    }

    public List<Chapter> getChapters()
    {
        return this.chapters;
    }
}
