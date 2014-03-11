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
        $username  = $request->has('username')  ? $request->get('username') : null;   // 5
        $firstName = $request->has('firstname') ? $request->get('firstname') : null;  // 5
        $lastName  = $request->has('lastname')  ? $request->get('lastname') : null;   // 5

        if (trim($username) == '' || $username == null) {                             // 3
            throw new \RuntimeException('Username must not be empty');
        }

        $user = new User();
        $user->setUsername($username);
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        // ...
    }
}
