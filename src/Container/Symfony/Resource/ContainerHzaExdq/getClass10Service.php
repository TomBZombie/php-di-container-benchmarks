<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'DiContainerBenchmarks\Fixture\Class10' shared autowired service.

include_once $this->targetDirs[3].'/Fixture/Class10.php';
include_once $this->targetDirs[3].'/Fixture/Class9.php';
include_once $this->targetDirs[3].'/Fixture/Class8.php';
include_once $this->targetDirs[3].'/Fixture/Class7.php';
include_once $this->targetDirs[3].'/Fixture/Class6.php';
include_once $this->targetDirs[3].'/Fixture/Class5.php';
include_once $this->targetDirs[3].'/Fixture/Class4.php';
include_once $this->targetDirs[3].'/Fixture/Class3.php';
include_once $this->targetDirs[3].'/Fixture/Class2.php';
include_once $this->targetDirs[3].'/Fixture/Class1.php';

return $this->services['DiContainerBenchmarks\Fixture\Class10'] = new \DiContainerBenchmarks\Fixture\Class10(new \DiContainerBenchmarks\Fixture\Class9(new \DiContainerBenchmarks\Fixture\Class8(new \DiContainerBenchmarks\Fixture\Class7(new \DiContainerBenchmarks\Fixture\Class6(new \DiContainerBenchmarks\Fixture\Class5(new \DiContainerBenchmarks\Fixture\Class4(new \DiContainerBenchmarks\Fixture\Class3(new \DiContainerBenchmarks\Fixture\Class2(new \DiContainerBenchmarks\Fixture\Class1())))))))));
