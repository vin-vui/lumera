<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Generator;
use Illuminate\Container\Container;
use App\Models\CaseStudy;

class DatabaseSeeder extends Seeder
{
    /* The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /* Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        for ($i = 1; $i <= 9; $i++) {
            DB::table('specialties')->insert([
                'label' => Str::upper($this->faker->word()),
            ]);
        }

        for ($i = 1; $i <= 26; $i++) {
            DB::table('tags')->insert([
                'label' => $this->faker->word(),
            ]);
        }

        for ($i = 1; $i <= 100; $i++) {
            DB::table('creators')->insert([
                'first_name' => $this->faker->firstName(),
                'last_name' => $this->faker->lastName(),
                'nick_name' => $this->faker->word() .'_'. $this->faker->word(),
                'location' => $this->faker->city(),
                'image' => $this->faker->imageUrl(1900, 1200, 'animals', true, 'cats'),
                'description' => $this->faker->paragraph(),
                'sn_tiktok' => $this->faker->url(),
                'sn_snapchat' => $this->faker->url(),
                'sn_instagram' => $this->faker->url(),
                'sn_youtube' => $this->faker->url(),
                'sn_linkedin' => $this->faker->url(),
                'display' => $this->faker->boolean(),
                'specialty_id' => $this->faker->randomDigitNotNull(),
            ]);
        }

        for ($i = 1; $i <= 13; $i++) {
            DB::table('case_studies')->insert([
                'title' => $this->faker->catchPhrase(),
                'image' => $this->faker->imageUrl(1900, 1200, 'animals', true, 'cats'),
                'client' => $this->faker->company(),
                'year' => $this->faker->year(),
                'description' => $this->faker->paragraph(14),
                'bloc_wysiwyg' => null,
                'display' => $this->faker->boolean(),
            ]);
        }

        foreach (CaseStudy::all() as $caseStudy) {
            $caseStudy->tags()->sync([$this->faker->numberBetween(1, 26), $this->faker->numberBetween(1, 26), $this->faker->numberBetween(1, 26), $this->faker->numberBetween(1, 26)]);
            $caseStudy->creators()->sync([$this->faker->numberBetween(1, 100), $this->faker->numberBetween(1, 100), $this->faker->numberBetween(1, 100), $this->faker->numberBetween(1, 100)]);
        }

    }

}
