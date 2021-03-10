WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-03-05 20:59:07

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.27
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-191x127.jpg
- destination: [doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-191x127.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 100
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-191x127.jpg
- destination: [doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-191x127.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 100
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /usr/bin/cwebp
- /bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
Trying to convert by executing the following command:
nice cwebp -metadata none -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-191x127.jpg' -o '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-191x127.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-191x127.jpg.webp.lossy.webp'
File:      [doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-191x127.jpg
Dimension: 191 x 127
Output:    2968 bytes Y-U-V-All-PSNR 37.88 41.17 41.48   38.76 dB
block count:  intra4: 86
              intra16: 10  (-> 10.42%)
              skipped block: 0 (0.00%)
bytes used:  header:             61  (2.1%)
             mode-partition:    433  (14.6%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |      89 |     778 |    1091 |     113 |    2071  (69.8%)
 intra16-coeffs:  |       0 |       0 |       0 |      36 |      36  (1.2%)
  chroma coeffs:  |      38 |     112 |     166 |      23 |     339  (11.4%)
    macroblocks:  |       2%|      21%|      51%|      25%|      96
      quantizer:  |      39 |      34 |      28 |      21 |
   filter level:  |      18 |      11 |       7 |       4 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     127 |     890 |    1257 |     172 |    2446  (82.4%)

Success
Reduction: 95% (went from 55 kb to 3 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /usr/bin/cwebp
- /bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Trying to convert by executing the following command:
nice cwebp -metadata none -q 70 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-191x127.jpg' -o '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-191x127.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-191x127.jpg.webp.lossless.webp'
File:      [doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-191x127.jpg
Dimension: 191 x 127
Output:    33262 bytes
Lossless-ARGB compressed size: 33262 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=2 transform=3 cache=1

Success
Reduction: 41% (went from 55 kb to 32 kb)

Picking lossy
cwebp succeeded :)

Converted image in 378 ms, reducing file size with 95% (went from 55 kb to 3 kb)
