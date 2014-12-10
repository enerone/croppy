<?php namespace Larabook\Tiposcultivo;

use Larabook\Tiposcultivo\Tipocultivo;
use Larabook\Users\TiposcultivoRepository;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class RegisterUserCommandHandler implements CommandHandler {

    use DispatchableTrait;

    protected $repository;

    function __construct(TipocultivoRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * Handle the command
     *
     * @param  $command
     * @return mixed
     */
    public function handle($command) {

        $tipocultivo = Tipocultivo::register(
            $command->titulo, $command->descripcion, $command->imagen
        );

        $this->repository->save($tipocultivo);

        $this->dispatchEventsFor($tipocultivo);

        return $tipocultivo;
    }
}