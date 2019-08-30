# Header-Helper

### Usage

```php
print headerHelper( 'Title', 'Description', 'Keywords', 'Type of the page', 'Full url to the image', 'Robots index', 'Css array');
```

### Params

##### Title

 - Title is a string

##### Description

 - Description is a string

##### Keywords
  
 - Keywords are list of your keywords. Example "keywords, keyword2, etc"
  
##### Type

 - Type is type of the page check out [this](https://stackoverflow.com/a/51701628/7406948).
 
##### Image

 - Image is full url for the image. Example: https://example.com/images/image.jpg
 
##### URL

 - If you do not provide URL, it wil be self generated. But you must declare it like null. If you want to have some custom URL, just declare it like string.
 
##### Robots

 - [Check this out](https://www.robotstxt.org/meta.html)
```
noindex, follow
index, nofollow
noindex, nofollow
index, follow
etc....  
```
##### CSS

 - You can also manage css files from this function. But you must use an array in a function. So the best solution is to declare an array. Then to use it in a function.
 ```php
    $css = array(
    '/css/bootstrap.min.css',
    '/css/style.css',
    '/css/style2.css',
    .... etc
    );
```
 
