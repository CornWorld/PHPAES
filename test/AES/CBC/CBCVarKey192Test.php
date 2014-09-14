<?php

# CAVS 11.1
# Config info for aes_values
# AESVS VarKey test data for CBC
# State : Encrypt and Decrypt
# Key Length : 192
# Generated on Fri Apr 22 15:11:35 2011

namespace AES\Test;

use AES\Mode\CBC;
use AES\Context\CBC as Context;

class CBCVarKey192 extends \PHPUnit_Framework_TestCase
{
    function caseProvider()
    {
        return [
            ['800000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'de885dc87f5a92594082d02cc1e1b42c'],
            ['c00000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '132b074e80f2a597bf5febd8ea5da55e'],
            ['e00000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '6eccedf8de592c22fb81347b79f2db1f'],
            ['f00000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '180b09f267c45145db2f826c2582d35c'],
            ['f80000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'edd807ef7652d7eb0e13c8b5e15b3bc0'],
            ['fc0000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9978bcf8dd8fd72241223ad24b31b8a4'],
            ['fe0000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '5310f654343e8f27e12c83a48d24ff81'],
            ['ff0000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '833f71258d53036b02952c76c744f5a1'],
            ['ff8000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'eba83ff200cff9318a92f8691a06b09f'],
            ['ffc000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ff620ccbe9f3292abdf2176b09f04eba'],
            ['ffe000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7ababc4b3f516c9aafb35f4140b548f9'],
            ['fff000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'aa187824d9c4582b0916493ecbde8c57'],
            ['fff800000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1c0ad553177fd5ea1092c9d626a29dc4'],
            ['fffc00000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a5dc46c37261194124ecaebd680408ec'],
            ['fffe00000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'e4f2f2ae23e9b10bacfa58601531ba54'],
            ['ffff00000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b7d67cf1a1e91e8ff3a57a172c7bf412'],
            ['ffff80000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '26706be06967884e847d137128ce47b3'],
            ['ffffc0000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b2f8b409b0585909aad3a7b5a219072a'],
            ['ffffe0000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '5e4b7bff0290c78344c54a23b722cd20'],
            ['fffff0000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '07093657552d4414227ce161e9ebf7dd'],
            ['fffff8000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'e1af1e7d8bc225ed4dffb771ecbb9e67'],
            ['fffffc000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ef6555253635d8432156cfd9c11b145a'],
            ['fffffe000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'fb4035074a5d4260c90cbd6da6c3fceb'],
            ['ffffff000000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '446ee416f9ad1c103eb0cc96751c88e1'],
            ['ffffff800000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '198ae2a4637ac0a7890a8fd1485445c9'],
            ['ffffffc00000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '562012ec8faded0825fb2fa70ab30cbd'],
            ['ffffffe00000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'cc8a64b46b5d88bf7f247d4dbaf38f05'],
            ['fffffff00000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a168253762e2cc81b42d1e5001762699'],
            ['fffffff80000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1b41f83b38ce5032c6cd7af98cf62061'],
            ['fffffffc0000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '61a89990cd1411750d5fb0dc988447d4'],
            ['fffffffe0000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b5accc8ed629edf8c68a539183b1ea82'],
            ['ffffffff0000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b16fa71f846b81a13f361c43a851f290'],
            ['ffffffff8000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '4fad6efdff5975aee7692234bcd54488'],
            ['ffffffffc000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ebfdb05a783d03082dfe5fdd80a00b17'],
            ['ffffffffe000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'eb81b584766997af6ba5529d3bdd8609'],
            ['fffffffff000000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '0cf4ff4f49c8a0ca060c443499e29313'],
            ['fffffffff800000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'cc4ba8a8e029f8b26d8afff9df133bb6'],
            ['fffffffffc00000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'fefebf64360f38e4e63558f0ffc550c3'],
            ['fffffffffe00000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '12ad98cbf725137d6a8108c2bed99322'],
            ['ffffffffff00000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '6afaa996226198b3e2610413ce1b3f78'],
            ['ffffffffff80000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '2a8ce6747a7e39367828e290848502d9'],
            ['ffffffffffc0000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '223736e8b8f89ca1e37b6deab40facf1'],
            ['ffffffffffe0000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c0f797e50418b95fa6013333917a9480'],
            ['fffffffffff0000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a758de37c2ece2a02c73c01fedc9a132'],
            ['fffffffffff8000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '3a9b87ae77bae706803966c66c73adbd'],
            ['fffffffffffc000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd365ab8df8ffd782e358121a4a4fc541'],
            ['fffffffffffe000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c8dcd9e6f75e6c36c8daee0466f0ed74'],
            ['ffffffffffff000000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c79a637beb1c0304f14014c037e736dd'],
            ['ffffffffffff800000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '105f0a25e84ac930d996281a5f954dd9'],
            ['ffffffffffffc00000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '42e4074b2927973e8d17ffa92f7fe615'],
            ['ffffffffffffe00000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '4fe2a9d2c1824449c69e3e0398f12963'],
            ['fffffffffffff00000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b7f29c1e1f62847a15253b28a1e9d712'],
            ['fffffffffffff80000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '36ed5d29b903f31e8983ef8b0a2bf990'],
            ['fffffffffffffc0000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '27b8070270810f9d023f9dd7ff3b4aa2'],
            ['fffffffffffffe0000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '94d46e155c1228f61d1a0db4815ecc4b'],
            ['ffffffffffffff0000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ca6108d1d98071428eeceef1714b96dd'],
            ['ffffffffffffff8000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'dc5b25b71b6296cf73dd2cdcac2f70b1'],
            ['ffffffffffffffc000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '44aba95e8a06a2d9d3530d2677878c80'],
            ['ffffffffffffffe000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a570d20e89b467e8f5176061b81dd396'],
            ['fffffffffffffff000000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '758f4467a5d8f1e7307dc30b34e404f4'],
            ['fffffffffffffff800000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'bcea28e9071b5a2302970ff352451bc5'],
            ['fffffffffffffffc00000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7523c00bc177d331ad312e09c9015c1c'],
            ['fffffffffffffffe00000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ccac61e3183747b3f5836da21a1bc4f4'],
            ['ffffffffffffffff00000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '707b075791878880b44189d3522b8c30'],
            ['ffffffffffffffff80000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7132d0c0e4a07593cf12ebb12be7688c'],
            ['ffffffffffffffffc0000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'effbac1644deb0c784275fe56e19ead3'],
            ['ffffffffffffffffe0000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a005063f30f4228b374e2459738f26bb'],
            ['fffffffffffffffff0000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '29975b5f48bb68fcbbc7cea93b452ed7'],
            ['fffffffffffffffff8000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'cf3f2576e2afedc74bb1ca7eeec1c0e7'],
            ['fffffffffffffffffc000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '07c403f5f966e0e3d9f296d6226dca28'],
            ['fffffffffffffffffe000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c8c20908249ab4a34d6dd0a31327ff1a'],
            ['ffffffffffffffffff000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c0541329ecb6159ab23b7fc5e6a21bca'],
            ['ffffffffffffffffff800000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7aa1acf1a2ed9ba72bc6deb31d88b863'],
            ['ffffffffffffffffffc00000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '808bd8eddabb6f3bf0d5a8a27be1fe8a'],
            ['ffffffffffffffffffe00000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '273c7d7685e14ec66bbb96b8f05b6ddd'],
            ['fffffffffffffffffff00000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '32752eefc8c2a93f91b6e73eb07cca6e'],
            ['fffffffffffffffffff80000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd893e7d62f6ce502c64f75e281f9c000'],
            ['fffffffffffffffffffc0000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '8dfd999be5d0cfa35732c0ddc88ff5a5'],
            ['fffffffffffffffffffe0000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '02647c76a300c3173b841487eb2bae9f'],
            ['ffffffffffffffffffff0000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '172df8b02f04b53adab028b4e01acd87'],
            ['ffffffffffffffffffff8000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '054b3bf4998aeb05afd87ec536533a36'],
            ['ffffffffffffffffffffc000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '3783f7bf44c97f065258a666cae03020'],
            ['ffffffffffffffffffffe000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'aad4c8a63f80954104de7b92cede1be1'],
            ['fffffffffffffffffffff000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'cbfe61810fd5467ccdacb75800f3ac07'],
            ['fffffffffffffffffffff800000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '830d8a2590f7d8e1b55a737f4af45f34'],
            ['fffffffffffffffffffffc00000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'fffcd4683f858058e74314671d43fa2c'],
            ['fffffffffffffffffffffe00000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '523d0babbb82f46ebc9e70b1cd41ddd0'],
            ['ffffffffffffffffffffff00000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '344aab37080d7486f7d542a309e53eed'],
            ['ffffffffffffffffffffff80000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '56c5609d0906b23ab9caca816f5dbebd'],
            ['ffffffffffffffffffffffc0000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7026026eedd91adc6d831cdf9894bdc6'],
            ['ffffffffffffffffffffffe0000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '88330baa4f2b618fc9d9b021bf503d5a'],
            ['fffffffffffffffffffffff0000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'fc9e0ea22480b0bac935c8a8ebefcdcf'],
            ['fffffffffffffffffffffff8000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '29ca779f398fb04f867da7e8a44756cb'],
            ['fffffffffffffffffffffffc000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '51f89c42985786bfc43c6df8ada36832'],
            ['fffffffffffffffffffffffe000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '6ac1de5fb8f21d874e91c53b560c50e3'],
            ['ffffffffffffffffffffffff000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '03aa9058490eda306001a8a9f48d0ca7'],
            ['ffffffffffffffffffffffff800000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'e34ec71d6128d4871865d617c30b37e3'],
            ['ffffffffffffffffffffffffc00000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '14be1c535b17cabd0c4d93529d69bf47'],
            ['ffffffffffffffffffffffffe00000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c9ef67756507beec9dd3862883478044'],
            ['fffffffffffffffffffffffff00000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '40e231fa5a5948ce2134e92fc0664d4b'],
            ['fffffffffffffffffffffffff80000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '03194b8e5dda5530d0c678c0b48f5d92'],
            ['fffffffffffffffffffffffffc0000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '90bd086f237cc4fd99f4d76bde6b4826'],
            ['fffffffffffffffffffffffffe0000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '19259761ca17130d6ed86d57cd7951ee'],
            ['ffffffffffffffffffffffffff0000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd7cbb3f34b9b450f24b0e8518e54da6d'],
            ['ffffffffffffffffffffffffff8000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '725b9caebe9f7f417f4068d0d2ee20b3'],
            ['ffffffffffffffffffffffffffc000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9d924b934a90ce1fd39b8a9794f82672'],
            ['ffffffffffffffffffffffffffe000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c50562bf094526a91c5bc63c0c224995'],
            ['fffffffffffffffffffffffffff000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd2f11805046743bd74f57188d9188df7'],
            ['fffffffffffffffffffffffffff800000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '8dd274bd0f1b58ae345d9e7233f9b8f3'],
            ['fffffffffffffffffffffffffffc00000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9d6bdc8f4ce5feb0f3bed2e4b9a9bb0b'],
            ['fffffffffffffffffffffffffffe00000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'fd5548bcf3f42565f7efa94562528d46'],
            ['ffffffffffffffffffffffffffff00000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd2ccaebd3a4c3e80b063748131ba4a71'],
            ['ffffffffffffffffffffffffffff80000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'e03cb23d9e11c9d93f117e9c0a91b576'],
            ['ffffffffffffffffffffffffffffc0000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '78f933a2081ac1db84f69d10f4523fe0'],
            ['ffffffffffffffffffffffffffffe0000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '4061f7412ed320de0edc8851c2e2436f'],
            ['fffffffffffffffffffffffffffff0000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9064ba1cd04ce6bab98474330814b4d4'],
            ['fffffffffffffffffffffffffffff8000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '48391bffb9cfff80ac238c886ef0a461'],
            ['fffffffffffffffffffffffffffffc000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b8d2a67df5a999fdbf93edd0343296c9'],
            ['fffffffffffffffffffffffffffffe000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'aaca7367396b69a221bd632bea386eec'],
            ['ffffffffffffffffffffffffffffff000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a80fd5020dfe65f5f16293ec92c6fd89'],
            ['ffffffffffffffffffffffffffffff800000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '2162995b8217a67f1abc342e146406f8'],
            ['ffffffffffffffffffffffffffffffc00000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c6a6164b7a60bae4e986ffac28dfadd9'],
            ['ffffffffffffffffffffffffffffffe00000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '64e0d7f900e3d9c83e4b8f96717b2146'],
            ['fffffffffffffffffffffffffffffff00000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1ad2561de8c1232f5d8dbab4739b6cbb'],
            ['fffffffffffffffffffffffffffffff80000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '279689e9a557f58b1c3bf40c97a90964'],
            ['fffffffffffffffffffffffffffffffc0000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c4637e4a5e6377f9cc5a8638045de029'],
            ['fffffffffffffffffffffffffffffffe0000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '492e607e5aea4688594b45f3aee3df90'],
            ['ffffffffffffffffffffffffffffffff0000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'e8c4e4381feec74054954c05b777a00a'],
            ['ffffffffffffffffffffffffffffffff8000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '91549514605f38246c9b724ad839f01d'],
            ['ffffffffffffffffffffffffffffffffc000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '74b24e3b6fefe40a4f9ef7ac6e44d76a'],
            ['ffffffffffffffffffffffffffffffffe000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '2437a683dc5d4b52abb4a123a8df86c6'],
            ['fffffffffffffffffffffffffffffffff000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'bb2852c891c5947d2ed44032c421b85f'],
            ['fffffffffffffffffffffffffffffffff800000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1b9f5fbd5e8a4264c0a85b80409afa5e'],
            ['fffffffffffffffffffffffffffffffffc00000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '30dab809f85a917fe924733f424ac589'],
            ['fffffffffffffffffffffffffffffffffe00000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'eaef5c1f8d605192646695ceadc65f32'],
            ['ffffffffffffffffffffffffffffffffff00000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b8aa90040b4c15a12316b78e0f9586fc'],
            ['ffffffffffffffffffffffffffffffffff80000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '97fac8297ceaabc87d454350601e0673'],
            ['ffffffffffffffffffffffffffffffffffc0000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9b47ef567ac28dfe488492f157e2b2e0'],
            ['ffffffffffffffffffffffffffffffffffe0000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1b8426027ddb962b5c5ba7eb8bc9ab63'],
            ['fffffffffffffffffffffffffffffffffff0000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'e917fc77e71992a12dbe4c18068bec82'],
            ['fffffffffffffffffffffffffffffffffff8000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'dceebbc98840f8ae6daf76573b7e56f4'],
            ['fffffffffffffffffffffffffffffffffffc000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '4e11a9f74205125b61e0aee047eca20d'],
            ['fffffffffffffffffffffffffffffffffffe000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'f60467f55a1f17eab88e800120cbc284'],
            ['ffffffffffffffffffffffffffffffffffff000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd436649f600b449ee276530f0cd83c11'],
            ['ffffffffffffffffffffffffffffffffffff800000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '3bc0e3656a9e3ac7cd378a737f53b637'],
            ['ffffffffffffffffffffffffffffffffffffc00000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '6bacae63d33b928aa8380f8d54d88c17'],
            ['ffffffffffffffffffffffffffffffffffffe00000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '8935ffbc75ae6251bf8e859f085adcb9'],
            ['fffffffffffffffffffffffffffffffffffff00000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '93dc4970fe35f67747cb0562c06d875a'],
            ['fffffffffffffffffffffffffffffffffffff80000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '14f9df858975851797ba604fb0d16cc7'],
            ['fffffffffffffffffffffffffffffffffffffc0000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '02ea0c98dca10b38c21b3b14e8d1b71f'],
            ['fffffffffffffffffffffffffffffffffffffe0000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '8f091b1b5b0749b2adc803e63dda9b72'],
            ['ffffffffffffffffffffffffffffffffffffff0000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '05b389e3322c6da08384345a4137fd08'],
            ['ffffffffffffffffffffffffffffffffffffff8000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '381308c438f35b399f10ad71b05027d8'],
            ['ffffffffffffffffffffffffffffffffffffffc000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '68c230fcfa9279c3409fc423e2acbe04'],
            ['ffffffffffffffffffffffffffffffffffffffe000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1c84a475acb011f3f59f4f46b76274c0'],
            ['fffffffffffffffffffffffffffffffffffffff000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '45119b68cb3f8399ee60066b5611a4d7'],
            ['fffffffffffffffffffffffffffffffffffffff800000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9423762f527a4060ffca312dcca22a16'],
            ['fffffffffffffffffffffffffffffffffffffffc00000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'f361a2745a33f056a5ac6ace2f08e344'],
            ['fffffffffffffffffffffffffffffffffffffffe00000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '5ef145766eca849f5d011536a6557fdb'],
            ['ffffffffffffffffffffffffffffffffffffffff00000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c9af27b2c89c9b4cf4a0c4106ac80318'],
            ['ffffffffffffffffffffffffffffffffffffffff80000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'fb9c4f16c621f4eab7e9ac1d7551dd57'],
            ['ffffffffffffffffffffffffffffffffffffffffc0000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '138e06fba466fa70854d8c2e524cffb2'],
            ['ffffffffffffffffffffffffffffffffffffffffe0000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'fb4bc78b225070773f04c40466d4e90c'],
            ['fffffffffffffffffffffffffffffffffffffffff0000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '8b2cbff1ed0150feda8a4799be94551f'],
            ['fffffffffffffffffffffffffffffffffffffffff8000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '08b30d7b3f27962709a36bcadfb974bd'],
            ['fffffffffffffffffffffffffffffffffffffffffc000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'fdf6d32e044d77adcf37fb97ac213326'],
            ['fffffffffffffffffffffffffffffffffffffffffe000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '93cb284ecdcfd781a8afe32077949e88'],
            ['ffffffffffffffffffffffffffffffffffffffffff000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7b017bb02ec87b2b94c96e40a26fc71a'],
            ['ffffffffffffffffffffffffffffffffffffffffff800000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c5c038b6990664ab08a3aaa5df9f3266'],
            ['ffffffffffffffffffffffffffffffffffffffffffc00000', '00000000000000000000000000000000', '00000000000000000000000000000000', '4b7020be37fab6259b2a27f4ec551576'],
            ['ffffffffffffffffffffffffffffffffffffffffffe00000', '00000000000000000000000000000000', '00000000000000000000000000000000', '60136703374f64e860b48ce31f930716'],
            ['fffffffffffffffffffffffffffffffffffffffffff00000', '00000000000000000000000000000000', '00000000000000000000000000000000', '8d63a269b14d506ccc401ab8a9f1b591'],
            ['fffffffffffffffffffffffffffffffffffffffffff80000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd317f81dc6aa454aee4bd4a5a5cff4bd'],
            ['fffffffffffffffffffffffffffffffffffffffffffc0000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'dddececd5354f04d530d76ed884246eb'],
            ['fffffffffffffffffffffffffffffffffffffffffffe0000', '00000000000000000000000000000000', '00000000000000000000000000000000', '41c5205cc8fd8eda9a3cffd2518f365a'],
            ['ffffffffffffffffffffffffffffffffffffffffffff0000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'cf42fb474293d96eca9db1b37b1ba676'],
            ['ffffffffffffffffffffffffffffffffffffffffffff8000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a231692607169b4ecdead5cd3b10db3e'],
            ['ffffffffffffffffffffffffffffffffffffffffffffc000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ace4b91c9c669e77e7acacd19859ed49'],
            ['ffffffffffffffffffffffffffffffffffffffffffffe000', '00000000000000000000000000000000', '00000000000000000000000000000000', '75db7cfd4a7b2b62ab78a48f3ddaf4af'],
            ['fffffffffffffffffffffffffffffffffffffffffffff000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c1faba2d46e259cf480d7c38e4572a58'],
            ['fffffffffffffffffffffffffffffffffffffffffffff800', '00000000000000000000000000000000', '00000000000000000000000000000000', '241c45bc6ae16dee6eb7bea128701582'],
            ['fffffffffffffffffffffffffffffffffffffffffffffc00', '00000000000000000000000000000000', '00000000000000000000000000000000', '8fd03057cf1364420c2b78069a3e2502'],
            ['fffffffffffffffffffffffffffffffffffffffffffffe00', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ddb505e6cc1384cbaec1df90b80beb20'],
            ['ffffffffffffffffffffffffffffffffffffffffffffff00', '00000000000000000000000000000000', '00000000000000000000000000000000', '5674a3bed27bf4bd3622f9f5fe208306'],
            ['ffffffffffffffffffffffffffffffffffffffffffffff80', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b687f26a89cfbfbb8e5eeac54055315e'],
            ['ffffffffffffffffffffffffffffffffffffffffffffffc0', '00000000000000000000000000000000', '00000000000000000000000000000000', '0547dd32d3b29ab6a4caeb606c5b6f78'],
            ['ffffffffffffffffffffffffffffffffffffffffffffffe0', '00000000000000000000000000000000', '00000000000000000000000000000000', '186861f8bc5386d31fb77f720c3226e6'],
            ['fffffffffffffffffffffffffffffffffffffffffffffff0', '00000000000000000000000000000000', '00000000000000000000000000000000', 'eacf1e6c4224efb38900b185ab1dfd42'],
            ['fffffffffffffffffffffffffffffffffffffffffffffff8', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd241aab05a42d319de81d874f5c7b90d'],
            ['fffffffffffffffffffffffffffffffffffffffffffffffc', '00000000000000000000000000000000', '00000000000000000000000000000000', '5eb9bc759e2ad8d2140a6c762ae9e1ab'],
            ['fffffffffffffffffffffffffffffffffffffffffffffffe', '00000000000000000000000000000000', '00000000000000000000000000000000', '018596e15e78e2c064159defce5f3085'],
            ['ffffffffffffffffffffffffffffffffffffffffffffffff', '00000000000000000000000000000000', '00000000000000000000000000000000', 'dd8a493514231cbf56eccee4c40889fb']
        ];
    }

    /**
     * @dataProvider caseProvider
     */
    function testEncrypt($key, $iv, $plaintext, $ciphertext)
    {
        $ctx = new Context(hex2bin($key), hex2bin($iv));
        $cbc = new CBC();
        $result = $cbc->encrypt($ctx, hex2bin($plaintext));
        $this->assertSame(hex2bin($ciphertext), $result);
    }

    /**
     * @dataProvider caseProvider
     */
    function testDecrypt($key, $iv, $plaintext, $ciphertext)
    {
        $ctx = new Context(hex2bin($key), hex2bin($iv));
        $cbc = new CBC();
        $result = $cbc->decrypt($ctx, hex2bin($ciphertext));
        $this->assertSame(hex2bin($plaintext), $result);
    }
}
