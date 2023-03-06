<? $blog = [
    'blog' => [
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item1',
            'img' => 'images/1.jpg',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item2',
            'img' => 'images/2.jpg',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item3',
            'img' => 'images/3.png',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item4',
            'img' => 'images/4.png',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item5',
            'img' => 'images/5.png',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item6',
            'img' => 'images/6.png',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item7',
            'img' => 'images/7.png',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item8',
            'img' => 'images/8.png',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item9',
            'img' => 'images/9.png',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item10',
            'img' => 'images/10.png',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-item11',
            'img' => 'images/11.png',
        ],
    ],
];
?>
<? echo $mustache -> render('blog_content', $blog) ?>