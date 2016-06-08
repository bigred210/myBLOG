<?php

class PostTableSeeder extends Seeder 
{
    public function run()
    {
        $post = new Post();
        $post->user_id = User::first()->id;
        $post->title = 'Learned to seed tables';
        $post->body = 'today we were taught how to seed tables. this was fun yet dull';
        $post->save();

        $post = new post();
        $post->user_id = 1;
        $post->title = 'lunch time speakers';
        $post->body = 'i like that on days we have lunch time speakers we are able to have 1.5 hour lunches. yay!!';
        $post->save();

        $post = new post();
        $post->user_id = 3;
        $post->title = 'Instructors';
        $post->body = 'All of the instructors here are awesome, each one has their own teaching style, but have a teaching goal that we all succeed.';
        $post->save(); 

        $post = new post();
        $post->user_id = 2;
        $post->title = 'Why learn coding';
        $post->body = 'I chose to learn coding for many reasons. Most recently I had spoke in passing with my wife that I would like to return back to school and get a degree. I have always been facinated with computers and electronics in general. So I sat down and looked up creer growth graphs and where the need would be and continue to rise within the tech community. I will continue this later .......';
        $post->save();
    }
}