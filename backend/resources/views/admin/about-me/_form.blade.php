@php
    $content = $aboutMeContent ?? null;
    $value = fn ($field) => old($field, $content?->{$field});
@endphp

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach
    </div>
@endif

<form action="{{ $formAction }}" method="POST" enctype="multipart/form-data" class="main-footer">
    @csrf
    @if($formMethod !== 'POST') @method($formMethod) @endif
    <h2 class="text-center mb-5">{{ $formTitle }}</h2>

    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Hero Image {{ $content ? '(optional)' : '' }}</label>
            <input type="file" class="form-control mb-3" name="hero_image" accept="image/*" {{ $content ? '' : 'required' }}>
            @if($content?->hero_image)<img src="{{ asset('storage/' . $content->hero_image) }}" alt="Hero" width="140" class="mb-4">@endif
        </div>
        <div class="col-md-6">
            <label class="form-label">Portrait Image {{ $content ? '(optional)' : '' }}</label>
            <input type="file" class="form-control mb-3" name="portrait_image" accept="image/*" {{ $content ? '' : 'required' }}>
            @if($content?->portrait_image)<img src="{{ asset('storage/' . $content->portrait_image) }}" alt="Portrait" width="140" class="mb-4">@endif
        </div>
    </div>

    <h4 class="mt-3">Hero</h4>
    <input class="form-control mb-3" name="hero_kicker" placeholder="The person behind Pixio" value="{{ $value('hero_kicker') }}">
    <input class="form-control mb-4" name="hero_title" placeholder="About Me" value="{{ $value('hero_title') }}">

    <h4>Introduction</h4>
    <input class="form-control mb-3" name="intro_kicker" placeholder="Hello, I'm Kenneth" value="{{ $value('intro_kicker') }}">
    <input class="form-control mb-3" name="intro_title" placeholder="Your introduction heading" value="{{ $value('intro_title') }}">
    <textarea class="form-control mb-3" name="intro_paragraph_one" rows="4" placeholder="First paragraph">{{ $value('intro_paragraph_one') }}</textarea>
    <textarea class="form-control mb-3" name="intro_paragraph_two" rows="4" placeholder="Second paragraph">{{ $value('intro_paragraph_two') }}</textarea>
    <div class="row">
        <div class="col-md-6"><input class="form-control mb-4" name="signature_name" placeholder="Kenneth Fong" value="{{ $value('signature_name') }}"></div>
        <div class="col-md-6"><input class="form-control mb-4" name="signature_role" placeholder="Founder & creative director" value="{{ $value('signature_role') }}"></div>
    </div>

    <h4>Values</h4>
    <input class="form-control mb-3" name="values_kicker" placeholder="What I believe" value="{{ $value('values_kicker') }}">
    @foreach([1, 2, 3] as $number)
        <div class="row">
            <div class="col-md-5"><input class="form-control mb-3" name="value_{{ $number }}_title" placeholder="Value {{ $number }} title" value="{{ $value('value_'.$number.'_title') }}"></div>
            <div class="col-md-7"><textarea class="form-control mb-3" name="value_{{ $number }}_description" rows="2" placeholder="Value {{ $number }} description">{{ $value('value_'.$number.'_description') }}</textarea></div>
        </div>
    @endforeach

    <h4>Quote and Contact</h4>
    <textarea class="form-control mb-3" name="quote" rows="3" placeholder="Your quote">{{ $value('quote') }}</textarea>
    <input class="form-control mb-3" name="contact_kicker" placeholder="Stay in touch" value="{{ $value('contact_kicker') }}">
    <input class="form-control mb-3" name="contact_title" placeholder="Contact heading" value="{{ $value('contact_title') }}">
    <div class="row">
        <div class="col-md-6"><input class="form-control mb-3" type="email" name="contact_email" placeholder="hello@pixio.style" value="{{ $value('contact_email') }}"></div>
        <div class="col-md-6"><input class="form-control mb-3" name="instagram_handle" placeholder="@pixio.style" value="{{ $value('instagram_handle') }}"></div>
    </div>

    <label class="form-check mb-4"><input class="form-check-input" type="checkbox" name="status" value="1" {{ old('status', $content?->status ?? true) ? 'checked' : '' }}> Active</label>
    <button type="submit" class="btn btn-primary">{{ $content ? 'Update About Me' : 'Save About Me' }}</button>
</form>
