<?php

namespace Database\Seeders;

use App\Models\CategoryNestedSet;
use Illuminate\Database\Seeder;

class CategoryNestedSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Books',
                'children' => [
                    [
                        'name' => 'Comic Book',
                        'children' => [
                            ['name' => 'Marvel Comic Book'],
                            ['name' => 'DC Comic Book'],
                            ['name' => 'Action comics'],
                        ],
                    ],
                    [
                        'name' => 'Textbooks',
                        'children' => [
                            ['name' => 'Business'],
                            ['name' => 'Finance'],
                            ['name' => 'Computer Science'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Electronics',
                'children' => [
                    [
                        'name' => 'TV',
                        'children' => [
                            [
                                'name' => 'LED',
                                'children' => [
                                    ['name' => '1'],
                                    ['name' => '2'],
                                ]
                            ],
                            [
                                'name' => 'Blu-ray',
                                'children' => [
                                    ['name' => '3'],
                                    ['name' => '4'],
                                ]
                            ],
                        ],
                    ],
                    [
                        'name' => 'Mobile',
                        'children' => [
                            ['name' => 'Samsung'],
                            ['name' => 'iPhone'],
                            ['name' => 'Xiomi'],
                        ],
                    ],
                ],
            ],
        ];
        foreach ($categories as $category) {
            CategoryNestedSet::create($category);
        }
    }
}
