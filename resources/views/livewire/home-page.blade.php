<div>
    <div x-data="{ count: 0 }">
        <button @click="count++">Add</button>
        <span x-text="count">0</span>
    </div>

    <div class="w-full" x-data="alpineMuliSelect({selected:['te_11', 'te_12'], elementId:'multSelect'})">

            <select style="display:none;" id="multSelect">
                <option value="te_1" data-search="arsenal">Arsenal</option>
                <option value="te_3" data-search="Tottenham Hotspur Spurs">Spurs</option>
                <option value="te_3" data-search="Manchester City">Man City</option>
            </select>
        </div>

</div>
