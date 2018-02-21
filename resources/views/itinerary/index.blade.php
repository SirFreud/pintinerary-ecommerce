@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="tile is-ancestor">
                <div class="columns is-multiline" style="width: 100%">
                    @for ($i = 0; $i < 23; $i++)
                        <div class="column is-one-third">
                            <div class="tile is-12 is-parent">
                                <article class="tile is-child notification is-primary box">
                                    <p class="title">Vertical...</p>
                                    <p class="subtitle">Top tile</p>
                                    <figure class="image is-4by3">
                                        <img src="https://bulma.io/images/placeholders/640x480.png">
                                    </figure>
                                </article>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

@endsection