<?php


namespace Models;


class Author extends \Model
{
    protected const TABLE = 'authors';

    public string $pseudonym;

    public string $last_name;

    public string $firstName;

}