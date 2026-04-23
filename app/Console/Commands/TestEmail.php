<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\GreetingMail;
use App\Mail\RegisterMailAdmin;

class TestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:test {--email=test@example.com}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test email configuration and send sample emails';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->option('email');
        
        $this->info('Testing email configuration...');
        
        try {
            // Test greeting email
            $this->info('Sending greeting email...');
            Mail::to($email)->send(new GreetingMail($email));
            $this->info('✅ Greeting email sent successfully!');
            
            // Test admin notification email
            $this->info('Sending admin notification email...');
            $testData = [
                'email' => $email,
                'phone' => '1234567890',
                'city' => 'Test City',
                'page_name' => 'Test Page',
                'whatsapp_update' => 'yes'
            ];
            
            Mail::to('contact@360bizservice.com')->send(new RegisterMailAdmin($testData));
            $this->info('✅ Admin notification email sent successfully!');
            
            $this->info('🎉 All email tests completed successfully!');
            
        } catch (\Exception $e) {
            $this->error('❌ Email test failed: ' . $e->getMessage());
            return 1;
        }
        
        return 0;
    }
}
