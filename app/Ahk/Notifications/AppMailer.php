<?php

/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   10/2/2016
 */

namespace App\Ahk\Notifications;

use Illuminate\Mail\Mailer;

class AppMailer
{
	protected $mailer;
	protected $view;
	protected $from = "admin@chamb.net";
	protected $to;
	protected $data = [];

	public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	public function sendEmailConfirmation($user)
	{
		$this->to = $user->email;
		$this->view = "ahk.emails.confirm";
		$this->data = compact('user');

		$this->deliver();

		return true;
	}

	private function deliver()
	{
		$this->mailer->send($this->view, $this->data, function ($message)
		{
			$message->from($this->from, 'Administrator')
				->to($this->to);
		});
	}
}