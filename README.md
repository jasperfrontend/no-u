# no-u bot
A 'bot' that replies with no-u answers whenever you call no-u.php

## Example
[https://jasper.monster/no-u/no-u.php](https://jasper.monster/no-u/no-u.php).

## Usage
You can use this with your favourite Twitch / YouTube bot. Below are a few examples:

### StreamElements bot
`!command add nou no @${user}, ur ${urlfetch https://your-website.ex/no-u.php}`

### Streamlabs (don't use Streamlabs they suck)
`!addcommand !nou no @{touser.name}, ur $readapi(https://your-website.ex/no-u.php)`

### WizeBot
`!cmd add !nou no @$(display_name), ur $urlcall(https://your-website.ex/no-u.php)`