
# __Blocs blade__

## Créateurs
```html
@foreach (App\Models\Creator::where('display', true)->get() as $creator)
    <--- do the magic --->
@endforeach
```

### Visuel
```html
<img class="" src="{{ Storage::disk('uploads')->url($creator->image) }}" alt="">
```

### Nom / Prénom / Pseudo
```html
{{ $creator->last_name }}
{{ $creator->first_name }}
{{ $creator->nick_name }}
```

### Description
```html
{{ $creator->description }}
```

### Localisation
```html
{{ $creator->location }}
```

### Réseaux Sociaux
```html
{{ $creator->sn_tiktok }}
{{ $creator->sn_snapchat }}
{{ $creator->sn_instagram }}
{{ $creator->sn_youtube }}
{{ $creator->sn_linkedin }}
```

### Domaine
```html
@if ($creator->specialty_id != null && $creator->specialty()->exists())
    {{ $creator->specialty->label }}
@else
    <--- manquant --->
@endif
```


## Études de cas

### Loop
```html
@foreach (App\Models\CaseStudy::all() as $case)
    <--- do the magic --->
@endforeach
```

### Visuel
```html
<img class="" src="{{ Storage::disk('uploads')->url($case->image) }}" alt="">
```
    
### Titre
```html
{{ $case->title }}
```
    
### Année
```html
{{ $case->year }}
```
    
### Description
```html
{{ $case->description }}
```

### Bloc WYSIWYG
```html
<div class="trix">
    {!! $case->bloc_wysiwyg !!}
</div>
```

Exemple de CSS pour Trix
```css
.trix {
    @apply w-full;
}

.trix h3 {
    font-size: 1.25rem !important;
    line-height: 1.25rem !important;
    @apply leading-5 font-semibold mb-4;
}

.trix a:not(.no-underline) {
    @apply underline;
}

.trix a:visited {
    color: green;
}

.trix ul {
    list-style-type: disc;
    padding-left: 1rem;
}

.trix ol {
    list-style-type: decimal;
    padding-left: 1rem;
}

.trix pre {
    display: inline-block;
    width: 100%;
    vertical-align: top;
    font-family: monospace;
    font-size: 1.5em;
    padding: 0.5em;
    white-space: pre;
    background-color: #eee;
    overflow-x: auto;
}

.trix blockquote {
    border: 0 solid #ccc;
    border-left-width: 0px;
    border-left-width: 0.3em;
    margin-left: 0.3em;
    padding-left: 0.6em;
}

.trix-button-group--file-tools {
    display: none!important;
}
```

### Tags
```html
@foreach ($case->tags as $tag)
    {{ $tag->label }}
@endforeach
```

### Créateurs
```html
@foreach ($case->creators as $creator)
    {{ $creator->first_name }}
    {{ $creator->last_name }}
    {{ $creator->nick_name }}
    ...
@endforeach
```
