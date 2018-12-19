<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PasswordReset extends Notification
{
    use Queueable;

    protected $email;
    protected $password;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($email, $password)
    {
        $this->password = $password;
        $this->email = $email;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Şifreniz Sıfırlandı')
            ->line('Parolanız başarıyla değiştirildi.')
            ->line('E-Mail: ' . $this->email)
            ->line('Yeni Şifre: ' . $this->password);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
