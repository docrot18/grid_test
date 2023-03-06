<? $blog = [
    'blog' => [
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-2x1',
            'img' => 'images/1.jpg',
        ],
        [
            'class' => 'blog-photo-item',
            'img' => 'images/2.jpg',
        ],
        [
            'class' => 'blog-photo-item',
            'img' => 'images/3.png',
        ],
        [
            'class' => 'blog-photo-item',
            'img' => 'images/4.png',
        ],
        [
            'class' => 'blog-photo-item',
            'img' => 'images/5.png',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-2x1',
            'img' => 'images/6.png',
        ],
        [
            'class' => 'blog-photo-item',
            'subclass' => 'blog-photo-2x2',
            'img' => 'images/7.png',
        ],
        [
            'class' => 'blog-photo-item',
            'img' => 'images/8.png',
        ],
        [
            'class' => 'blog-photo-item',
            'img' => 'images/9.png',
        ],
        [
            'class' => 'blog-photo-item',
            'img' => 'images/10.png',
        ],
        [
            'class' => 'blog-photo-item',
            'img' => 'images/11.png',
        ],
    ],
];
?>
<? echo $mustache -> render('blog_content', $blog) ?>