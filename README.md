## Introduction

![screenshot](https://raw.githubusercontent.com/leandrocfe/filament-widget-examples/master/screenshots/example-1.jpg)

In this project, we will explore how to use Filament widgets to create statistic cards that display user statistics about the user table. We will also see how to refresh the widgets when the user table is changed, using Livewire lifecycle hooks and events.

## Installation

```bash
git clone https://github.com/leandrocfe/filament-widget-examples.git
```

Run the commands:

```bash
cd filament-widget-examples
cp .env.example .env
composer install
```

Laravel sail:

```bash
sail up -d
```

Run the migrate command:

```bash
sail artisan migrate --seed
```

## Usage

Once you have started the Artisan development server, your application will be accessible in your web browser at [http://localhost/admin](http://localhost/admin).

You can choose a user's credentials and authenticate to access the Filament Admin Panel (default password: _password_).

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)

I hope you enjoy it :)
