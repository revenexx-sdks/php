<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Runtimes implements JsonSerializable
{
    private static Runtimes $NODE180;
    private static Runtimes $NODE200;
    private static Runtimes $NODE22;
    private static Runtimes $NODE23;
    private static Runtimes $NODE24;
    private static Runtimes $NODE25;
    private static Runtimes $PHP81;
    private static Runtimes $PHP82;
    private static Runtimes $PHP83;
    private static Runtimes $PHP84;
    private static Runtimes $RUBY31;
    private static Runtimes $RUBY32;
    private static Runtimes $RUBY33;
    private static Runtimes $RUBY34;
    private static Runtimes $RUBY40;
    private static Runtimes $PYTHON39;
    private static Runtimes $PYTHON310;
    private static Runtimes $PYTHON311;
    private static Runtimes $PYTHON312;
    private static Runtimes $PYTHON313;
    private static Runtimes $PYTHON314;
    private static Runtimes $PYTHONML311;
    private static Runtimes $PYTHONML312;
    private static Runtimes $PYTHONML313;
    private static Runtimes $DENO146;
    private static Runtimes $DENO20;
    private static Runtimes $DENO25;
    private static Runtimes $DENO26;
    private static Runtimes $DART218;
    private static Runtimes $DART219;
    private static Runtimes $DART30;
    private static Runtimes $DART31;
    private static Runtimes $DART33;
    private static Runtimes $DART35;
    private static Runtimes $DART38;
    private static Runtimes $DART39;
    private static Runtimes $DART310;
    private static Runtimes $DOTNET80;
    private static Runtimes $DOTNET10;
    private static Runtimes $JAVA80;
    private static Runtimes $JAVA110;
    private static Runtimes $JAVA170;
    private static Runtimes $JAVA210;
    private static Runtimes $JAVA22;
    private static Runtimes $JAVA25;
    private static Runtimes $SWIFT58;
    private static Runtimes $SWIFT59;
    private static Runtimes $SWIFT510;
    private static Runtimes $SWIFT62;
    private static Runtimes $KOTLIN18;
    private static Runtimes $KOTLIN19;
    private static Runtimes $KOTLIN20;
    private static Runtimes $KOTLIN23;
    private static Runtimes $CPP17;
    private static Runtimes $CPP20;
    private static Runtimes $CPP23;
    private static Runtimes $BUN10;
    private static Runtimes $BUN11;
    private static Runtimes $BUN12;
    private static Runtimes $BUN13;
    private static Runtimes $GO123;
    private static Runtimes $GO124;
    private static Runtimes $GO125;
    private static Runtimes $GO126;
    private static Runtimes $STATIC1;
    private static Runtimes $FLUTTER324;
    private static Runtimes $FLUTTER327;
    private static Runtimes $FLUTTER329;
    private static Runtimes $FLUTTER332;
    private static Runtimes $FLUTTER335;
    private static Runtimes $FLUTTER338;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function NODE180(): Runtimes
    {
        if (!isset(self::$NODE180)) {
            self::$NODE180 = new Runtimes('node-18.0');
        }
        return self::$NODE180;
    }
    public static function NODE200(): Runtimes
    {
        if (!isset(self::$NODE200)) {
            self::$NODE200 = new Runtimes('node-20.0');
        }
        return self::$NODE200;
    }
    public static function NODE22(): Runtimes
    {
        if (!isset(self::$NODE22)) {
            self::$NODE22 = new Runtimes('node-22');
        }
        return self::$NODE22;
    }
    public static function NODE23(): Runtimes
    {
        if (!isset(self::$NODE23)) {
            self::$NODE23 = new Runtimes('node-23');
        }
        return self::$NODE23;
    }
    public static function NODE24(): Runtimes
    {
        if (!isset(self::$NODE24)) {
            self::$NODE24 = new Runtimes('node-24');
        }
        return self::$NODE24;
    }
    public static function NODE25(): Runtimes
    {
        if (!isset(self::$NODE25)) {
            self::$NODE25 = new Runtimes('node-25');
        }
        return self::$NODE25;
    }
    public static function PHP81(): Runtimes
    {
        if (!isset(self::$PHP81)) {
            self::$PHP81 = new Runtimes('php-8.1');
        }
        return self::$PHP81;
    }
    public static function PHP82(): Runtimes
    {
        if (!isset(self::$PHP82)) {
            self::$PHP82 = new Runtimes('php-8.2');
        }
        return self::$PHP82;
    }
    public static function PHP83(): Runtimes
    {
        if (!isset(self::$PHP83)) {
            self::$PHP83 = new Runtimes('php-8.3');
        }
        return self::$PHP83;
    }
    public static function PHP84(): Runtimes
    {
        if (!isset(self::$PHP84)) {
            self::$PHP84 = new Runtimes('php-8.4');
        }
        return self::$PHP84;
    }
    public static function RUBY31(): Runtimes
    {
        if (!isset(self::$RUBY31)) {
            self::$RUBY31 = new Runtimes('ruby-3.1');
        }
        return self::$RUBY31;
    }
    public static function RUBY32(): Runtimes
    {
        if (!isset(self::$RUBY32)) {
            self::$RUBY32 = new Runtimes('ruby-3.2');
        }
        return self::$RUBY32;
    }
    public static function RUBY33(): Runtimes
    {
        if (!isset(self::$RUBY33)) {
            self::$RUBY33 = new Runtimes('ruby-3.3');
        }
        return self::$RUBY33;
    }
    public static function RUBY34(): Runtimes
    {
        if (!isset(self::$RUBY34)) {
            self::$RUBY34 = new Runtimes('ruby-3.4');
        }
        return self::$RUBY34;
    }
    public static function RUBY40(): Runtimes
    {
        if (!isset(self::$RUBY40)) {
            self::$RUBY40 = new Runtimes('ruby-4.0');
        }
        return self::$RUBY40;
    }
    public static function PYTHON39(): Runtimes
    {
        if (!isset(self::$PYTHON39)) {
            self::$PYTHON39 = new Runtimes('python-3.9');
        }
        return self::$PYTHON39;
    }
    public static function PYTHON310(): Runtimes
    {
        if (!isset(self::$PYTHON310)) {
            self::$PYTHON310 = new Runtimes('python-3.10');
        }
        return self::$PYTHON310;
    }
    public static function PYTHON311(): Runtimes
    {
        if (!isset(self::$PYTHON311)) {
            self::$PYTHON311 = new Runtimes('python-3.11');
        }
        return self::$PYTHON311;
    }
    public static function PYTHON312(): Runtimes
    {
        if (!isset(self::$PYTHON312)) {
            self::$PYTHON312 = new Runtimes('python-3.12');
        }
        return self::$PYTHON312;
    }
    public static function PYTHON313(): Runtimes
    {
        if (!isset(self::$PYTHON313)) {
            self::$PYTHON313 = new Runtimes('python-3.13');
        }
        return self::$PYTHON313;
    }
    public static function PYTHON314(): Runtimes
    {
        if (!isset(self::$PYTHON314)) {
            self::$PYTHON314 = new Runtimes('python-3.14');
        }
        return self::$PYTHON314;
    }
    public static function PYTHONML311(): Runtimes
    {
        if (!isset(self::$PYTHONML311)) {
            self::$PYTHONML311 = new Runtimes('python-ml-3.11');
        }
        return self::$PYTHONML311;
    }
    public static function PYTHONML312(): Runtimes
    {
        if (!isset(self::$PYTHONML312)) {
            self::$PYTHONML312 = new Runtimes('python-ml-3.12');
        }
        return self::$PYTHONML312;
    }
    public static function PYTHONML313(): Runtimes
    {
        if (!isset(self::$PYTHONML313)) {
            self::$PYTHONML313 = new Runtimes('python-ml-3.13');
        }
        return self::$PYTHONML313;
    }
    public static function DENO146(): Runtimes
    {
        if (!isset(self::$DENO146)) {
            self::$DENO146 = new Runtimes('deno-1.46');
        }
        return self::$DENO146;
    }
    public static function DENO20(): Runtimes
    {
        if (!isset(self::$DENO20)) {
            self::$DENO20 = new Runtimes('deno-2.0');
        }
        return self::$DENO20;
    }
    public static function DENO25(): Runtimes
    {
        if (!isset(self::$DENO25)) {
            self::$DENO25 = new Runtimes('deno-2.5');
        }
        return self::$DENO25;
    }
    public static function DENO26(): Runtimes
    {
        if (!isset(self::$DENO26)) {
            self::$DENO26 = new Runtimes('deno-2.6');
        }
        return self::$DENO26;
    }
    public static function DART218(): Runtimes
    {
        if (!isset(self::$DART218)) {
            self::$DART218 = new Runtimes('dart-2.18');
        }
        return self::$DART218;
    }
    public static function DART219(): Runtimes
    {
        if (!isset(self::$DART219)) {
            self::$DART219 = new Runtimes('dart-2.19');
        }
        return self::$DART219;
    }
    public static function DART30(): Runtimes
    {
        if (!isset(self::$DART30)) {
            self::$DART30 = new Runtimes('dart-3.0');
        }
        return self::$DART30;
    }
    public static function DART31(): Runtimes
    {
        if (!isset(self::$DART31)) {
            self::$DART31 = new Runtimes('dart-3.1');
        }
        return self::$DART31;
    }
    public static function DART33(): Runtimes
    {
        if (!isset(self::$DART33)) {
            self::$DART33 = new Runtimes('dart-3.3');
        }
        return self::$DART33;
    }
    public static function DART35(): Runtimes
    {
        if (!isset(self::$DART35)) {
            self::$DART35 = new Runtimes('dart-3.5');
        }
        return self::$DART35;
    }
    public static function DART38(): Runtimes
    {
        if (!isset(self::$DART38)) {
            self::$DART38 = new Runtimes('dart-3.8');
        }
        return self::$DART38;
    }
    public static function DART39(): Runtimes
    {
        if (!isset(self::$DART39)) {
            self::$DART39 = new Runtimes('dart-3.9');
        }
        return self::$DART39;
    }
    public static function DART310(): Runtimes
    {
        if (!isset(self::$DART310)) {
            self::$DART310 = new Runtimes('dart-3.10');
        }
        return self::$DART310;
    }
    public static function DOTNET80(): Runtimes
    {
        if (!isset(self::$DOTNET80)) {
            self::$DOTNET80 = new Runtimes('dotnet-8.0');
        }
        return self::$DOTNET80;
    }
    public static function DOTNET10(): Runtimes
    {
        if (!isset(self::$DOTNET10)) {
            self::$DOTNET10 = new Runtimes('dotnet-10');
        }
        return self::$DOTNET10;
    }
    public static function JAVA80(): Runtimes
    {
        if (!isset(self::$JAVA80)) {
            self::$JAVA80 = new Runtimes('java-8.0');
        }
        return self::$JAVA80;
    }
    public static function JAVA110(): Runtimes
    {
        if (!isset(self::$JAVA110)) {
            self::$JAVA110 = new Runtimes('java-11.0');
        }
        return self::$JAVA110;
    }
    public static function JAVA170(): Runtimes
    {
        if (!isset(self::$JAVA170)) {
            self::$JAVA170 = new Runtimes('java-17.0');
        }
        return self::$JAVA170;
    }
    public static function JAVA210(): Runtimes
    {
        if (!isset(self::$JAVA210)) {
            self::$JAVA210 = new Runtimes('java-21.0');
        }
        return self::$JAVA210;
    }
    public static function JAVA22(): Runtimes
    {
        if (!isset(self::$JAVA22)) {
            self::$JAVA22 = new Runtimes('java-22');
        }
        return self::$JAVA22;
    }
    public static function JAVA25(): Runtimes
    {
        if (!isset(self::$JAVA25)) {
            self::$JAVA25 = new Runtimes('java-25');
        }
        return self::$JAVA25;
    }
    public static function SWIFT58(): Runtimes
    {
        if (!isset(self::$SWIFT58)) {
            self::$SWIFT58 = new Runtimes('swift-5.8');
        }
        return self::$SWIFT58;
    }
    public static function SWIFT59(): Runtimes
    {
        if (!isset(self::$SWIFT59)) {
            self::$SWIFT59 = new Runtimes('swift-5.9');
        }
        return self::$SWIFT59;
    }
    public static function SWIFT510(): Runtimes
    {
        if (!isset(self::$SWIFT510)) {
            self::$SWIFT510 = new Runtimes('swift-5.10');
        }
        return self::$SWIFT510;
    }
    public static function SWIFT62(): Runtimes
    {
        if (!isset(self::$SWIFT62)) {
            self::$SWIFT62 = new Runtimes('swift-6.2');
        }
        return self::$SWIFT62;
    }
    public static function KOTLIN18(): Runtimes
    {
        if (!isset(self::$KOTLIN18)) {
            self::$KOTLIN18 = new Runtimes('kotlin-1.8');
        }
        return self::$KOTLIN18;
    }
    public static function KOTLIN19(): Runtimes
    {
        if (!isset(self::$KOTLIN19)) {
            self::$KOTLIN19 = new Runtimes('kotlin-1.9');
        }
        return self::$KOTLIN19;
    }
    public static function KOTLIN20(): Runtimes
    {
        if (!isset(self::$KOTLIN20)) {
            self::$KOTLIN20 = new Runtimes('kotlin-2.0');
        }
        return self::$KOTLIN20;
    }
    public static function KOTLIN23(): Runtimes
    {
        if (!isset(self::$KOTLIN23)) {
            self::$KOTLIN23 = new Runtimes('kotlin-2.3');
        }
        return self::$KOTLIN23;
    }
    public static function CPP17(): Runtimes
    {
        if (!isset(self::$CPP17)) {
            self::$CPP17 = new Runtimes('cpp-17');
        }
        return self::$CPP17;
    }
    public static function CPP20(): Runtimes
    {
        if (!isset(self::$CPP20)) {
            self::$CPP20 = new Runtimes('cpp-20');
        }
        return self::$CPP20;
    }
    public static function CPP23(): Runtimes
    {
        if (!isset(self::$CPP23)) {
            self::$CPP23 = new Runtimes('cpp-23');
        }
        return self::$CPP23;
    }
    public static function BUN10(): Runtimes
    {
        if (!isset(self::$BUN10)) {
            self::$BUN10 = new Runtimes('bun-1.0');
        }
        return self::$BUN10;
    }
    public static function BUN11(): Runtimes
    {
        if (!isset(self::$BUN11)) {
            self::$BUN11 = new Runtimes('bun-1.1');
        }
        return self::$BUN11;
    }
    public static function BUN12(): Runtimes
    {
        if (!isset(self::$BUN12)) {
            self::$BUN12 = new Runtimes('bun-1.2');
        }
        return self::$BUN12;
    }
    public static function BUN13(): Runtimes
    {
        if (!isset(self::$BUN13)) {
            self::$BUN13 = new Runtimes('bun-1.3');
        }
        return self::$BUN13;
    }
    public static function GO123(): Runtimes
    {
        if (!isset(self::$GO123)) {
            self::$GO123 = new Runtimes('go-1.23');
        }
        return self::$GO123;
    }
    public static function GO124(): Runtimes
    {
        if (!isset(self::$GO124)) {
            self::$GO124 = new Runtimes('go-1.24');
        }
        return self::$GO124;
    }
    public static function GO125(): Runtimes
    {
        if (!isset(self::$GO125)) {
            self::$GO125 = new Runtimes('go-1.25');
        }
        return self::$GO125;
    }
    public static function GO126(): Runtimes
    {
        if (!isset(self::$GO126)) {
            self::$GO126 = new Runtimes('go-1.26');
        }
        return self::$GO126;
    }
    public static function STATIC1(): Runtimes
    {
        if (!isset(self::$STATIC1)) {
            self::$STATIC1 = new Runtimes('static-1');
        }
        return self::$STATIC1;
    }
    public static function FLUTTER324(): Runtimes
    {
        if (!isset(self::$FLUTTER324)) {
            self::$FLUTTER324 = new Runtimes('flutter-3.24');
        }
        return self::$FLUTTER324;
    }
    public static function FLUTTER327(): Runtimes
    {
        if (!isset(self::$FLUTTER327)) {
            self::$FLUTTER327 = new Runtimes('flutter-3.27');
        }
        return self::$FLUTTER327;
    }
    public static function FLUTTER329(): Runtimes
    {
        if (!isset(self::$FLUTTER329)) {
            self::$FLUTTER329 = new Runtimes('flutter-3.29');
        }
        return self::$FLUTTER329;
    }
    public static function FLUTTER332(): Runtimes
    {
        if (!isset(self::$FLUTTER332)) {
            self::$FLUTTER332 = new Runtimes('flutter-3.32');
        }
        return self::$FLUTTER332;
    }
    public static function FLUTTER335(): Runtimes
    {
        if (!isset(self::$FLUTTER335)) {
            self::$FLUTTER335 = new Runtimes('flutter-3.35');
        }
        return self::$FLUTTER335;
    }
    public static function FLUTTER338(): Runtimes
    {
        if (!isset(self::$FLUTTER338)) {
            self::$FLUTTER338 = new Runtimes('flutter-3.38');
        }
        return self::$FLUTTER338;
    }
}