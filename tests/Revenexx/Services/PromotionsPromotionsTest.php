<?php

namespace Revenexx\Services;

use Revenexx\Client;
use Revenexx\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Revenexx\Enums\Allocation;
use Revenexx\Enums\PromotionsConditionsCreateKind;
use Revenexx\Enums\MatchMode;
use Revenexx\Enums\PromotionsEffectsCreateKind;
use Revenexx\Enums\TargetScope;
use Revenexx\Enums\UnitChoice;
use Revenexx\Enums\ValueType;
use Revenexx\Enums\PromotionsGroupsCreateMode;
use Revenexx\Enums\ConditionMatch;
use Revenexx\Enums\Reach;
use Revenexx\Enums\RecurrenceKind;
use Revenexx\Enums\ReturnBehaviour;
use Revenexx\Enums\PromotionsPromotionsCreateStatus;

final class PromotionsPromotionsTest extends TestCase {
    private $client;
    private $promotionsPromotions;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->promotionsPromotions = new PromotionsPromotions($this->client);
    }

    public function testMethodPromotionsBundlesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsBundlesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBundlesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsBundlesCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBundlesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsBundlesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBundlesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsBundlesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsBundlesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsBundlesUpdate(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsConditionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsConditionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsConditionsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsConditionsCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsConditionsValidate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsConditionsValidate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsConditionsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsConditionsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsConditionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsConditionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsConditionsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsConditionsUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsCustomEffectTypesList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsCustomEffectTypesList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsCustomEffectTypesCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsCustomEffectTypesCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsCustomEffectTypesDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsCustomEffectTypesDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsCustomEffectTypesGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsCustomEffectTypesGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsCustomEffectTypesUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsCustomEffectTypesUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsEffectsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsEffectsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsEffectsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsEffectsCreate(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsEffectsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsEffectsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsEffectsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsEffectsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsEffectsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsEffectsUpdate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsGroupsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsGroupsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsGroupsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsGroupsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsGroupsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsGroupsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsGroupsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsGroupsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsGroupsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsGroupsUpdate(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsPromotionsList(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsPromotionsList(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsPromotionsCreate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsPromotionsCreate(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsPromotionsDelete(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsPromotionsDelete(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsPromotionsGet(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsPromotionsGet(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsPromotionsUpdate(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsPromotionsUpdate(
            "",
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsPromotionsConditions(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsPromotionsConditions(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsPromotionsConditionsCheck(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsPromotionsConditionsCheck(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodPromotionsPromotionsState(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->promotionsPromotions->promotionsPromotionsState(
            ""
        );

        $this->assertSame($data, $response);
    }

}
