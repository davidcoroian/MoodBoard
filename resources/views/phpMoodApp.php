<?php 
$url = 'https://hooks.slack.com/services/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';
$payload = '{
	"text": "Hey! Would you like to introduce your input for today?",
	"attachments": [
		{
			"text": "Please choose one of the moods displayed below",
			"fallback": "You are unable to choose a game",
			"callback_id": "wopr_game",
			"color": "#3AA3E3",
			"attachment_type": "default",
			"actions": [
				{
					"name": "mood",
					"text": "Happy :grin:",
					"type": "button",
					"value": "5"
				},
				{
					"name": "mood",
					"text": "Sick :face_with_head_bandage:",
					"type": "button",
					"value": "2"
				},
				{
					"name": "mood",
					"text": "Sad :pensive:",
					"style": "danger",
					"type": "button",
					"value": "1",
					"confirm": {
						"title": "We are sad to hear that.",
						"text": "Would you like to tell me why?",
						"ok_text": "Yes",
						"dismiss_text": "No"
					}
				}
			]
		}
	]
}';
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );


?>