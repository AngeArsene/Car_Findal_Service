<x-layouts.main>
    <div>
        <h1>{{ fake()->realText(20) }}</h1>
        <p>
            {{ fake()->realText }}
        </p>

        <div>
            <b>Contact : {{ fake()->phoneNumber }}</b>
        </div>
    </div>
</x-layouts.main>