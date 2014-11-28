#Welcome to Markit!

You are _successfully_ running [Markit](https://github.com/mauris/markit) now.

> **Markit is your very own Markdown out of the box website.**  
> Write Markdown documents, build a website and take over the tri-state area!

##Get Started

1. The configuration file for Markit can be found in `app/config/markit.php`.
2. Configure the `repository` setting to point to your folder of Markdown documents.
  - Alternatively you can place all your Markdown files in the `public` folder.

###Customization

- You can customize the theme / skeleton by modifying the `app/views/default.blade.php` file.
- 404 pages can be modified in the `app/views/404.blade.php` file.
- The default theme uses [Twitter Bootstrap](http://getbootstrap.com/), feel free to customize however you want.
- You can add your Google Analytics code in the `app/config/markit.php` file under the `ga` key.

> Note that images and other resources must be in the public folder  
> in order for your visitors to access them in the Markdown-rendered pages.
> <small>Sir Issac Newton, 1643 - 1727</small>

##Other Info

Markit was made possible with thanks to:

- [Laravel PHP Framework](http://laravel.com)
- [Graham Campbell's Markdown wrapper for Laravel](https://github.com/GrahamCampbell/Laravel-Markdown)
- [Emanuil Rusev's Parsedown parser for Markdown](https://github.com/erusev/parsedown-extra)
- [Bootstrap, made by the Good Guys @ Twitter](http://getbootstrap.com/)

If you find any issue with Markit, feel free to [raise it up on Github](https://github.com/mauris/markit/issues)  
and our [friendly customer service support team](http://mauris.sg) will attend to you shortly.
