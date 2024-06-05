<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create(['name' => 'Adhesive bandages', 'description' => 'For covering small cuts and wounds']);
        Item::create(['name' => 'Sterile gauze pads', 'description' => 'To control bleeding and dress larger wounds']);
        Item::create(['name' => 'Antiseptic wipes', 'description' => 'For cleaning wounds to prevent infection']);
        Item::create(['name' => 'Medical adhesive tape', 'description' => 'To secure bandages and dressings']);
        Item::create(['name' => 'Tweezers', 'description' => 'For removing splinters or debris from wounds']);
        Item::create(['name' => 'Scissors', 'description' => 'To cut gauze, tape, and clothing if necessary']);
        Item::create(['name' => 'Disposable gloves', 'description' => 'For protecting both the first aider and the patient from contamination']);
        Item::create(['name' => 'Instant cold packs', 'description' => 'To reduce swelling and relieve pain from minor injuries']);
        Item::create(['name' => 'Triangular bandage', 'description' => 'For making slings or securing splints']);
        Item::create(['name' => 'CPR mask', 'description' => 'For administering CPR safely']);
        Item::create(['name' => 'Burn gel or ointment', 'description' => 'To soothe and protect minor burns']);
        Item::create(['name' => 'Sterile eye wash solution', 'description' => 'For flushing out foreign objects from the eyes']);
        Item::create(['name' => 'Thermometer', 'description' => 'For monitoring body temperature']);
        Item::create(['name' => 'Safety pins', 'description' => 'For securing bandages and making improvised slings']);
        Item::create(['name' => 'Antihistamine tablets', 'description' => 'For treating allergic reactions']);
        Item::create(['name' => 'Pain relievers', 'description' => 'For minor aches and pains']);
        Item::create(['name' => 'Sterile saline solution', 'description' => 'For irrigating wounds or rinsing eyes']);
        Item::create(['name' => 'Oral rehydration salts', 'description' => 'For replenishing fluids lost due to dehydration']);
        Item::create(['name' => 'First aid manual', 'description' => 'For guidance on how to administer basic first aid procedures']);
        Item::create(['name' => 'Emergency contact information', 'description' => 'Including phone numbers for emergency services and personal contacts']);
    }
}
