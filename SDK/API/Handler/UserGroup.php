<?php

namespace API\Handler;

use API\Abstraction\AbstractAPI;

/**
 * Class UserGroup
 *
 * @package   API\Handler
 * @author    EPIGNOSIS
 *
 */
class UserGroup extends AbstractAPI
{
  /**
   * Creates a relation between the requested user and group.
   *
   * @param   mixed $userId  (Required) | The user identifier.
   * @param   mixed $groupId (Required) | The group identifier.
   *
   * @throws  \Exception
   *
   * @return  array (Associative)
   *
   */
  public function AddRelation($userId, $groupId)
  {
    $this->_CheckId($userId)->_CheckId($groupId);

    return $this->_requestHandler->Put (
      $this->_GetAPICallURL('/Group/' . $groupId . '/AddUser'),
      $this->_apiKey,
      ['UserId' => $userId]
    );
  }

  /**
   * Removes the relation between the requested user and group.
   *
   * @param   mixed $userId  (Required) | The user identifier.
   * @param   mixed $groupId (Required) | The group identifier.
   *
   * @throws  \Exception
   *
   * @return  array (Associative)
   *
   */
  public function RemoveRelation($userId, $groupId)
  {
    $this->_CheckId($userId)->_CheckId($groupId);

    return $this->_requestHandler->Put (
      $this->_GetAPICallURL('/Group/' . $groupId . '/RemoveUser'),
      $this->_apiKey,
      ['UserId' => $userId]
    );
  }
}
