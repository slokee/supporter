<?php

namespace Slokee\Supporter\Console;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeDirective extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:directive {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command is used to create a blade directive class';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        try {
            $name = Str::studly($this->argument('name'));
            $filePath = app_path("Blade/Directives/{$name}.php");

            if (File::exists($filePath)) {
                throw new Exception('Directive already exists');
            }

            $publishedStubPath = base_path('stubs/supporter/directive.stub');
            $defaultStubPath = __DIR__.'/../../stubs/directive.stub';
            $stubPath = File::exists($publishedStubPath) ? $publishedStubPath : $defaultStubPath;

            if (! File::exists($stubPath)) {
                throw new Exception('Stub file does not exist');
            }

            $content = str_replace(
                ['{{ class }}', '{{ directive_name }}'],
                [$name, strtolower($name)],
                File::get($stubPath)
            );

            File::ensureDirectoryExists(app_path('Blade/Directives'));
            File::put($filePath, $content);

            $this->info("{$name} directive created successfully.");
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

    /**
     * Prompt for missing arguments.
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'name' => ['Please provide the name of the service.', 'i.e. User'],
        ];
    }
}
