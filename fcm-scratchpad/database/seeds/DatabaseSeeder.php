<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 라라벨에 기본 내장된 User 모델 팩토리를 이용했다.
        $user = factory(App\User::class)->create([
            'email' => 'user@example.com',
            'name' => '김고객',
        ]);
        // User-Device 간 관계를 이용해서 새 더미 레코드를 생성했다.
        $user->devices()->create([
            'device_id' => str_random(16),
            'push_service_id' => str_random(152),
        ]);
    }
}
