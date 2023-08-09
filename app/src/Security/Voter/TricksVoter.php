<?php

namespace App\Security\Voter;

use App\Entity\Tricks;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class TricksVoter extends Voter
{
    // we define the constants that will be used
    const EDIT = 'TRICK_EDIT';
    const DELETE = 'TRICK_DELETE';
    const ADD = 'TRICK_ADD';

    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, $trick): bool
    {
        if (!in_array($attribute, [self::EDIT, self::DELETE, self::ADD])) {
            return false;
        }
        if (!$trick instanceof Tricks) {
            return false;
        }
        return true;
    }

    protected function voteOnAttribute($attribute, $trick, TokenInterface $token): bool
    {
        // we get the user from the token
        $user = $token->getUser();
        // we verify that the account has been validated
        if (!$user->getIsVerified()) { 
            return false;
        }
        // we check that the user is indeed an instance of userinterface
        if (!$user instanceof UserInterface) { return false;
        }
        // we check if the user is admin
        if (!$this->security->isGranted('ROLE_ADMIN')) { return true;
        }
        // if user not admin we check the permissions
        switch ($attribute) {
        case self::EDIT:
            // We check if the user can edit
            return $this->canEdit();
                break;
        case self::DELETE:
            // We check if the user can delete
            return $this->canDelete();
                break;
        case self::ADD:
            // We check if the user can add
             return $this->canAdd();
                break;
        }
    }

    private function canEdit()
    {
        return $this->security->isGranted('ROLE_USER');
    }
    private function canDelete()
    {
        return $this->security->isGranted('ROLE_USER');
    }
    private function canAdd()
    {
        return $this->security->isGranted('ROLE_USER');
    }
}
