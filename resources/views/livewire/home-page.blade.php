<div>

    <div x-data="{ count: 0 }">

        <button @click="count++">Add</button>
        <span x-text="count">0</span>

    </div>

    <x-alpine-multiselect preselect-values="'te_1', 'te_3'"
                          id-select="multSelect"
                          name="test"
    >
        <option value="te_1" data-search="arsenal">Arsenal</option>
        <option value="te_2" data-search="Tottenham Hotspur Spurs">Spurs</option>
        <option value="te_3" data-search="Manchester City">Man City</option>

    </x-alpine-multiselect>

</div>
