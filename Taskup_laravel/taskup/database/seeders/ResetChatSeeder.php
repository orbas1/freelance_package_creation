<?php

namespace Database\Seeders;

use Amentotech\Guppy\Models\Attachment;
use Amentotech\Guppy\Models\ChatAction;
use Amentotech\Guppy\Models\Friend;
use Amentotech\Guppy\Models\GpUser;
use Amentotech\Guppy\Models\GuestAccount;
use Amentotech\Guppy\Models\Message;
use Amentotech\Guppy\Models\Notification;
use Amentotech\Guppy\Models\Participant;
use Amentotech\Guppy\Models\SeenMessage;
use Amentotech\Guppy\Models\Thread;
use Amentotech\Guppy\Models\ThreadDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResetChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attachment::truncate();
        ChatAction::truncate();
        Friend::truncate();
        GpUser::truncate();
        GuestAccount::truncate();
        Message::truncate();
        Notification::truncate();
        Participant::truncate();
        SeenMessage::truncate();
        Thread::truncate();
        ThreadDetail::truncate();
    }
}
