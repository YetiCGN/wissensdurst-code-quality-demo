<?php
/**
 * Class NPathComplexity
 *
 * @author Jörn Wagner <joern.wagner@explicatis.com>
 */
namespace Acme\DemoBundle\Demo;

class NPathComplexity
{
    public function example()
    {
        $request   = $this->getRequest();
        $username  = $this->getOrNull($request, 'username');
        $firstName = $this->getOrNull($request, 'firstname');
        $lastName  = $this->getOrNull($request, 'lastname');

        if (trim($username) == '' || $username == null) {                             // 3
            throw new \RuntimeException('Username must not be empty');
        }

        $user = new User();
        $user->setUsername($username);
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        // ...
    }

    private function getOrNull($request, $input)
    {
        return $request->has($input) ? $request->get($input) : null;
    }
}
