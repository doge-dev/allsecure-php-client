<?php

namespace DogeDev\AllSecure\CustomerProfile;

use DogeDev\AllSecure\Json\ResponseObject;

/**
 * Class GetProfileResponse
 *
 * @package DogeDev\AllSecure\CustomerProfile
 *
 * @property bool $profileExists
 * @property string $profileGuid
 * @property string $customerIdentification
 * @property string $preferredMethod
 * @property CustomerData $customer
 * @property PaymentInstrument[] $paymentInstruments
 */
class GetProfileResponse extends ResponseObject {

}