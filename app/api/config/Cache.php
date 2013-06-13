<?php
class Cache
{
  private $personAngelaDavis = array(
      'id' => '4662954',
      'name' => 'Angela Davis',
      'email' => 'angela.davis@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/4753716ee406da95241ffc46f5b649092a859aba210b735e1fb1de5a907362ea6c1fb6963c6eeec9eaf28468ad3014c3377a55eae9474aac24643d31e23c6554b4c3880148db845209fdab878369850b/avatar.gif?r=3'
    );
  private $personRyanBenson = array(
      'id' => '697753',
      'name' => 'Ryan Benson',
      'email' => 'ryan.benson@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/42ab61d2f0334770c86184101b3abf09607a49ef/avatar.gif?r=3'
    );
  private $personMashallahBehbehani = array(
      'id' => '4572690',
      'name' => 'Mashallah Behbehani',
      'email' => 'mashallah.behbehani@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/7b1abcf6f0fff3888fb5d88a05eb8b0004f1ae2b3550279427b6026dd8224c4dff968fbb2570d8027b8e95f20348a5876e531212b0f87457bef34cff81887e44db9fe8bbdf460cc29755a25ee74823f0/avatar.gif?r=3'
    );
  private $personScottGottreu = array(
      'id' => '697761',
      'name' => 'Scott Gottreu',
      'email' => 'scott.gottreu@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/c54cf4a48ea46b8d4aa703fc14ac1ff86498c686/avatar.gif?r=3'
    );
  private $personSheenaBandy = array(
      'id' => '4419452',
      'name' => 'Sheena Bandy',
      'email' => 'sheena.bandy@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/fbcce64d9de918ba54b42ee5109a5ff262c3d8f2bff84e3715d4f0e3b6f0e0d609597e6745baf779dbf4904a751d4bc8c561934d032b9d3d49fff049591e02d66e5b0c9deba6f575c6838e547343c89c/avatar.gif?r=3'
    );
  private $personAngelMarquez = array(
      'id' => '4682298',
      'name' => 'Angel Marquez',
      'email' => 'angel.marquez@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/default_avatar_v1_8/avatar.gif?r=3'
    );
  private $personBrianHenderson = array(
      'id' => '4631370',
      'name' => 'Brian Henderson',
      'email' => 'brian.henderson@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/default_avatar_v1_0/avatar.gif?r=3'
    );
  private $personCassidyNewton = array(
      'id' => '1885901',
      'name' => 'Cassidy Newton',
      'email' => 'cassidy.newton@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/default_avatar_v1_1/avatar.gif?r=3'
    );
  private $personDanaFairbanks = array(
      'id' => '697751',
      'name' => 'Dana Fairbanks',
      'email' => 'dana.fairbanks@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/default_avatar_v1_1/avatar.gif?r=3'
    );
  private $personLaurenGourley = array(
      'id' => '697745',
      'name' => 'Lauren Gourley',
      'email' => 'lauren.gourley@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/373cd263a9c8f0768c87d50120c2ef3eca91c5b266ec455934e534648cd0381d6806f32bc0dcfa87941d8b96cf82521ef662ae6ecbc8859f3f6d9b06ad6b326a073555ed596eb0fb01dec6cc56a4aff5/avatar.gif?r=3'
    );
  private $personScottParker = array(
      'id' => '697742',
      'name' => 'Scott Parker',
      'email' => 'scott@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/6c380a750c0ec47badecb64f0735ebc4d37c220a03c8b491fab5c1cd82e608a95e1bc04167dd74d7da0eae01ab4ac7a3756a81b658c97e54e09b7e0788e41f55c91ab6aae482d62090d08a226a4968db/avatar.gif?r=3'
    );
  private $personStephenRussel = array(
      'id' => '697760',
      'name' => 'Stephen Russell',
      'email' => 'stephen.russell@warrendouglas.com',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/a4e2a4bc9771f79b92f41bbce22940c0220a8b6742e86d763c690bbc4e7271418958f84780fa75fc09432e90675369722224df8a0182e9f30e6406fa1a39094904a25df5415c4a43f131a856bc427934/avatar.gif?r=3'
    );

  //project sizes
  private $projectSizeSmall = array(
      'id' => '1',
      'name' => 'Small Size',
      'desc' => 'Peter Collora, Summit Casing',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/a4e2a4bc9771f79b92f41bbce22940c0220a8b6742e86d763c690bbc4e7271418958f84780fa75fc09432e90675369722224df8a0182e9f30e6406fa1a39094904a25df5415c4a43f131a856bc427934/avatar.gif?r=3'
    );
  private $projectSizeMedium = array(
      'id' => '2',
      'name' => 'Medium Size',
      'desc' => 'Personal Optics',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/a4e2a4bc9771f79b92f41bbce22940c0220a8b6742e86d763c690bbc4e7271418958f84780fa75fc09432e90675369722224df8a0182e9f30e6406fa1a39094904a25df5415c4a43f131a856bc427934/avatar.gif?r=3'
    );
  private $projectSizeLarge = array(
      'id' => '3',
      'name' => 'Large Size',
      'desc' => 'TAYE, Traffix',
      'avatar' => 'http://dge9rmgqjs8m1.cloudfront.net/global/a4e2a4bc9771f79b92f41bbce22940c0220a8b6742e86d763c690bbc4e7271418958f84780fa75fc09432e90675369722224df8a0182e9f30e6406fa1a39094904a25df5415c4a43f131a856bc427934/avatar.gif?r=3'
    );
  //app variables
  private $groups;

  public function __construct()
  {
    $this->groups['developers'] = array(
        $this->personRyanBenson,
        $this->personMashallahBehbehani,
        $this->personScottGottreu,
        $this->personSheenaBandy,
        $this->personAngelMarquez
    );
    $this->groups['designers'] = array(
        $this->personRyanBenson,
        $this->personBrianHenderson,
        $this->personMashallahBehbehani,
        $this->personAngelMarquez
    );
    $this->groups['projectmanagers'] = array(
        $this->personCassidyNewton
    );
    $this->groups['accountexecutives'] = array(
        $this->personAngelaDavis,
        $this->personDanaFairbanks,
        $this->personLaurenGourley,
        $this->personScottParker,
        $this->personStephenRussel
    );
    $this->groups['projectsize'] = array(
        $this->projectSizeSmall,
        $this->projectSizeMedium,
        $this->projectSizeLarge,
    );
  }

  public function get($group)
  {
    return $this->groups[$group];
  }

}
?>