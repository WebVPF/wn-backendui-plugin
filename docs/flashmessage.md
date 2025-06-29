## Flash message

Displays a floating flash message on the screen.

### Display onload

```html
<p data-control="flash-message" data-interval="5" class="info">
    This message is created from a static element. It will go away in 5 seconds.
</p>
```

<p data-control="flash-message" data-interval="5" class="info">
    This message is created from a static element. It will go away in 5 seconds.
</p>

### Trigger

<div class="example">
    <p>
        <a href="#" class="btn btn-primary" onclick="$.wn.flashMsg({text: 'The record has been successfully saved. This message will go away in 1 second.', 'class': 'success', 'interval': 1}); return false;">
            Show Success
        </a>
        <a href="javascript:;" class="btn btn-danger" onclick="$.wn.flashMsg({text: 'Babam!', 'class': 'error'}); return false;">
            Show Error
        </a>
        <a href="javascript:;" class="btn btn-warning" onclick="$.wn.flashMsg({text: 'Warning! Winter is too good for this world!', 'class': 'warning'}); return false;">
            Show Warning
        </a>
    </p>
</div>

```html
<p>
    <a href="#" class="btn btn-primary" onclick="$.wn.flashMsg({text: 'The record has been successfully saved. This message will go away in 1 second.', 'class': 'success', 'interval': 1}); return false;">
        Show Success
    </a>

    <a href="javascript:;" class="btn btn-danger" onclick="$.wn.flashMsg({text: 'Babam!', 'class': 'error'}); return false;">
        Show Error
    </a>

    <a href="javascript:;" class="btn btn-warning" onclick="$.wn.flashMsg({text: 'Warning! Winter is too good for this world!', 'class': 'warning'}); return false;">
        Show Warning
    </a>
</p>
```

### Display static

A flash message can be rendered as a static element by attaching the `static` class. The `data-control` attribute is not needed.

<div class="example">
    <p class="flash-message static success">
        Import completed successfully (success)
    </p>
    <p class="flash-message static info">
        Informative info box is informational (info)
    </p>
    <p class="flash-message static warning">
        Phasers have been set to stun (warning)
    </p>
    <p class="flash-message static error">
        We couldn't help you with that (error)
    </p>
</div>

```html
<p class="flash-message static success">
    Import completed successfully (success)
</p>

<p class="flash-message static info">
    Informative info box is informational (info)
</p>

<p class="flash-message static warning">
    Phasers have been set to stun (warning)
</p>

<p class="flash-message static error">
    We couldn't help you with that (error)
</p>
```

### Data attributes

- data-control="flash-message" - enables the flash message plugin
- data-interval="2" - the interval to display the message in seconds, optional. Default: 2

### JavaScript API

```js
$.wn.flashMsg({
    'text': 'Record saved.',
    'class': 'success',
    'interval': 3
})
```
