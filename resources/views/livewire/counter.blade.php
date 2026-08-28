<div class="counter-box">

    <p class="section-label">
        Laravel Livewire
    </p>

    <h2 class="mb-3">
        Counter
    </h2>

    <div class="counter-number">
        {{ $count }}
    </div>

    <div class="counter-buttons">

        <button
            wire:click="decrement"
            class="counter-button"
        >
            -1
        </button>

        <button
            wire:click="increment"
            class="counter-button"
        >
            +1
        </button>

    </div>

    <div class="counter-buttons mt-3">

        <button
            wire:click="decrementBy(5)"
            class="counter-button"
        >
            -5
        </button>

        <button
            wire:click="incrementBy(5)"
            class="counter-button"
        >
            +5
        </button>

    </div>

    <div class="counter-buttons mt-3">

        <button
            wire:click="decrementBy(10)"
            class="counter-button"
        >
            -10
        </button>

        <button
            wire:click="incrementBy(10)"
            class="counter-button"
        >
            +10
        </button>

    </div>

</div>