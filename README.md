![Version](https://img.shields.io/badge/Version-v1.0-success) 
![repo](https://img.shields.io/badge/Status-Active-success)
# PHP-Readability-Calculation
A php class for calculation readability of english or turkish texts, articles, etc.

### Usage
```php
$my_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a tortor velit. Maecenas eget magna a dolor tristique semper. Aenean finibus facilisis justo, a commodo purus posuere auctor. Nullam eu urna et est congue hendrerit. Nullam et interdum justo. Suspendisse pretium fermentum imperdiet. Etiam turpis mauris, auctor in purus vitae, tempor aliquam metus. Nulla pharetra condimentum lobortis. Quisque quis dui a orci ultricies aliquet sed a justo. Quisque at finibus felis.";

$text_object = new AtesmanText();
$text_object->setText($my_text);
$text_object->calculateLegibility();

echo $text_object->legibility;

```
