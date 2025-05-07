# BackendUI

Winter CMS User Interface Documentation

## Примеры

Сначала выводится элемент (через HTML), потом сразу за ним идёт код из примера.

HTML-код примера обворачивается тегами `div` с классом `example`.

    <div class="example">
        <!-- Example element -->
    </div>

    ```html
    <!-- Example HTML code -->
    ```

### Скрытый код

 кнопка Показать/Скрыть код.

```html
<div class="example">
    <!-- Example HTML -->
</div>
```

### Статический код

Код всегда виден и у него отсутствует кнопка Показать/Скрыть код.

Для этого в обёртке `example` в сочитании с классом `show-code`

```html
<div class="example show-code">
    <!-- Example HTML code -->
</div>
```
