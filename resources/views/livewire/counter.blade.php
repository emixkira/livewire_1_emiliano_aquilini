<div class="community-rating">

    <p class="section-label">
        Community
    </p>

    <h2>
        Valutazione degli utenti
    </h2>

    <p class="counter-description">
        Modifica il punteggio assegnato dalla community
        a questo film o serie TV.
    </p>

    <div class="community-score">
        {{ $count }}
    </div>

    <div class="counter-buttons">

        <button
            wire:click="decrement"
            class="counter-button counter-red"
        >
            -1
        </button>

        <button
            wire:click="increment"
            class="counter-button counter-green"
        >
            +1
        </button>

        <button
            wire:click="incrementBy(5)"
            class="counter-button counter-blue"
        >
            +5
        </button>

        <button
            wire:click="incrementBy(10)"
            class="counter-button counter-dark"
        >
            +10
        </button>

    </div>

    <div class="counter-buttons mt-3">

        <button
            wire:click="decrementBy(5)"
            class="counter-button counter-outline-red"
        >
            -5
        </button>

        <button
            wire:click="decrementBy(10)"
            class="counter-button counter-outline-dark"
        >
            -10
        </button>

        <button
            wire:click="resetCounter"
            class="counter-button counter-reset"
        >
            Reset
        </button>

    </div>

</div>