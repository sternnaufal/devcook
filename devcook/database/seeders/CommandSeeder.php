<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Command;

class CommandSeeder extends Seeder
{
    public function run(): void
    {
        // 2. Build Production Assets
Command::create([
    'title' => 'Build Production Assets',
    'category' => 'Frontend',
    'description' => 'Compile JS & CSS untuk production',
    'command_text' => "npm run build"
]);

// 3. Preview Production Build
Command::create([
    'title' => 'Preview Production Build',
    'category' => 'Frontend',
    'description' => 'Melihat hasil build production secara lokal',
    'command_text' => "npm run preview"
]);
// 5. Git Pull Latest Changes
Command::create([
    'title' => 'Git Pull Latest Changes',
    'category' => 'Git',
    'description' => 'Mengambil perubahan terbaru dari remote repository',
    'command_text' => "git pull origin main"
]);

// 6. Git Stash Changes
Command::create([
    'title' => 'Git Stash Changes',
    'category' => 'Git',
    'description' => 'Menyimpan perubahan sementara tanpa commit',
    'command_text' => "git stash save 'deskripsi singkat'"
]);
// 7. Git Apply Stash
Command::create([
    'title' => 'Git Apply Stash',
    'category' => 'Git',
    'description' => 'Mengembalikan perubahan yang disimpan di stash',
    'command_text' => "git stash apply"
]);
// 8. Backup MySQL Database
Command::create([
    'title' => 'Backup MySQL Database',
    'category' => 'Database',
    'description' => 'Membuat backup database MySQL ke file .sql',
    'command_text' => "mysqldump -u root -p nama_database > backup.sql"
]);

// 9. Import MySQL Database
Command::create([
    'title' => 'Import MySQL Database',
    'category' => 'Database',
    'description' => 'Import file .sql ke MySQL',
    'command_text' => "mysql -u root -p nama_database < backup.sql"
]);
Command::create([
    'title' => 'Check Node.js Version',
    'category' => 'Environment',
    'description' => 'Melihat versi Node.js yang terinstall',
    'command_text' => "node -v"
]);
// Batch 5 Commands - Global

// 1. Check System Info
Command::create([
    'title' => 'Check System Info',
    'category' => 'System',
    'description' => 'Melihat informasi OS dan kernel',
    'command_text' => "uname -a   # Linux / macOS\nsysteminfo # Windows"
]);

// 2. List Running Processes
Command::create([
    'title' => 'List Running Processes',
    'category' => 'System',
    'description' => 'Melihat semua proses yang sedang berjalan',
    'command_text' => "top  # Linux / macOS\ntasklist # Windows"
]);

// 3. Docker List Containers
Command::create([
    'title' => 'Docker List Containers',
    'category' => 'Docker',
    'description' => 'Melihat semua container yang berjalan',
    'command_text' => "docker ps"
]);

// 4. Docker Build Image
Command::create([
    'title' => 'Docker Build Image',
    'category' => 'Docker',
    'description' => 'Membangun image dari Dockerfile',
    'command_text' => "docker build -t nama_image ."
]);

// 5. Docker Run Container
Command::create([
    'title' => 'Docker Run Container',
    'category' => 'Docker',
    'description' => 'Menjalankan container dari image',
    'command_text' => "docker run -d -p 8080:80 nama_image"
]);

// 6. Ping a Server
Command::create([
    'title' => 'Ping a Server',
    'category' => 'Networking',
    'description' => 'Memeriksa koneksi ke host tertentu',
    'command_text' => "ping google.com"
]);

// 7. SSH to Server
Command::create([
    'title' => 'SSH to Server',
    'category' => 'Networking',
    'description' => 'Masuk ke server via SSH',
    'command_text' => "ssh user@server_ip"
]);

// 8. NPM Install Global Package
Command::create([
    'title' => 'Install NPM Global Package',
    'category' => 'Node.js',
    'description' => 'Install package Node.js secara global',
    'command_text' => "npm install -g package_name"
]);

// 9. Check PostgreSQL Databases
Command::create([
    'title' => 'Check PostgreSQL Databases',
    'category' => 'Database',
    'description' => 'Menampilkan semua database PostgreSQL',
    'command_text' => "psql -U username -l"
]);

// 10. SQLite Quick Check
Command::create([
    'title' => 'SQLite Quick Check',
    'category' => 'Database',
    'description' => 'Masuk ke SQLite shell dan list table',
    'command_text' => "sqlite3 database.db\n.tables"
]);

    }
}

