@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">
                    <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child notification is-primary box">
                                <p class="title">Vertical...</p>
                                <p class="subtitle">Top tile</p>
                                <figure class="image is-4by3">
                                    <img src="https://bulma.io/images/placeholders/640x480.png">
                                </figure>
                            </article>
                            
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child notification is-info box">
                                <p class="title">Middle tile</p>
                                <p class="subtitle">With an image</p>
                                <figure class="image is-4by3">
                                    <img src="https://bulma.io/images/placeholders/640x480.png">
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-success box">
                        <p class="title">Tall tile</p>
                        <p class="subtitle">With even more content</p>
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/640x480.png">
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection