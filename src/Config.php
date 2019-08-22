<?php declare(strict_types=1);

namespace Kooser\Chess;

/**
 * An extension on the `Chess` class (Config).
 */
class Config
{
    /** @const BLACK Black identifier. */
    const BLACK = 'b';

    /** @const WHITE White identifier. */
    const WHITE = 'w';

    /** @const PAWN Pawn identifier. */
    const PAWN = 'p';

    /** @const KNIGHT Knight identifier. */
    const KNIGHT = 'n';

    /** @const BISHOP Bishop identifier. */
    const BISHOP = 'b';

    /** @const ROOK Rook identifier. */
    const ROOK = 'r';

    /** @const QUEEN Queen identifier. */
    const QUEEN = 'q';

    /** @const KING King identifier. */
    const KING = 'k';

    /** @const SYMBOLS The piece symbols for both colors. */
    const SYMBOLS = 'pnbrqkPNBRQK';

    /** @const DEFAULT_POSITION The starting position for chess. */
    const DEFAULT_POSITION = 'rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1';

    /** @const POSSIBLE_RESULTS The possible endgame results. */
    const POSSIBLE_RESULTS = ['1-0', '0-1', '1/2-1/2', '*'];

    /** @const PAWN_OFFSETS The pawn offsets. */
    const PAWN_OFFSETS = [
        self::BLACK => [16,  32,  17,  15],
        self::WHITE => [-16, -32, -17, -15],
    ];

    /** @const PIECE_OFFSETS The other offsets. */
    const PIECE_OFFSETS = [
        self::KNIGHT => [-18, -33, -31, -14,  18,  33,  31,  14],
        self::BISHOP => [-17, -15,  17,  15],
        self::ROOK => [-16,   1,  16,  -1],
        self::QUEEN => [-17, -16, -15,   1,  17,  16,  15,  -1],
        self::KING => [-17, -16, -15,   1,  17,  16,  15,  -1],
    ];

    /** @const ATTACKS The attack rays. */
    const ATTACKS = [
        20, 0, 0, 0, 0, 0, 0, 24,  0, 0, 0, 0, 0, 0,20, 0,
         0,20, 0, 0, 0, 0, 0, 24,  0, 0, 0, 0, 0,20, 0, 0,
         0, 0,20, 0, 0, 0, 0, 24,  0, 0, 0, 0,20, 0, 0, 0,
         0, 0, 0,20, 0, 0, 0, 24,  0, 0, 0,20, 0, 0, 0, 0,
         0, 0, 0, 0,20, 0, 0, 24,  0, 0,20, 0, 0, 0, 0, 0,
         0, 0, 0, 0, 0,20, 2, 24,  2,20, 0, 0, 0, 0, 0, 0,
         0, 0, 0, 0, 0, 2,53, 56, 53, 2, 0, 0, 0, 0, 0, 0,
        24,24,24,24,24,24,56,  0, 56,24,24,24,24,24,24, 0,
         0, 0, 0, 0, 0, 2,53, 56, 53, 2, 0, 0, 0, 0, 0, 0,
         0, 0, 0, 0, 0,20, 2, 24,  2,20, 0, 0, 0, 0, 0, 0,
         0, 0, 0, 0,20, 0, 0, 24,  0, 0,20, 0, 0, 0, 0, 0,
         0, 0, 0,20, 0, 0, 0, 24,  0, 0, 0,20, 0, 0, 0, 0,
         0, 0,20, 0, 0, 0, 0, 24,  0, 0, 0, 0,20, 0, 0, 0,
         0,20, 0, 0, 0, 0, 0, 24,  0, 0, 0, 0, 0,20, 0, 0,
        20, 0, 0, 0, 0, 0, 0, 24,  0, 0, 0, 0, 0, 0,20
    ];

    /** @const RAYS Regular chess rays. */
    const RAYS = [
         17,  0,  0,  0,  0,  0,  0, 16,  0,  0,  0,  0,  0,  0, 15, 0,
          0, 17,  0,  0,  0,  0,  0, 16,  0,  0,  0,  0,  0, 15,  0, 0,
          0,  0, 17,  0,  0,  0,  0, 16,  0,  0,  0,  0, 15,  0,  0, 0,
          0,  0,  0, 17,  0,  0,  0, 16,  0,  0,  0, 15,  0,  0,  0, 0,
          0,  0,  0,  0, 17,  0,  0, 16,  0,  0, 15,  0,  0,  0,  0, 0,
          0,  0,  0,  0,  0, 17,  0, 16,  0, 15,  0,  0,  0,  0,  0, 0,
          0,  0,  0,  0,  0,  0, 17, 16, 15,  0,  0,  0,  0,  0,  0, 0,
          1,  1,  1,  1,  1,  1,  1,  0, -1, -1,  -1,-1, -1, -1, -1, 0,
          0,  0,  0,  0,  0,  0,-15,-16,-17,  0,  0,  0,  0,  0,  0, 0,
          0,  0,  0,  0,  0,-15,  0,-16,  0,-17,  0,  0,  0,  0,  0, 0,
          0,  0,  0,  0,-15,  0,  0,-16,  0,  0,-17,  0,  0,  0,  0, 0,
          0,  0,  0,-15,  0,  0,  0,-16,  0,  0,  0,-17,  0,  0,  0, 0,
          0,  0,-15,  0,  0,  0,  0,-16,  0,  0,  0,  0,-17,  0,  0, 0,
          0,-15,  0,  0,  0,  0,  0,-16,  0,  0,  0,  0,  0,-17,  0, 0,
        -15,  0,  0,  0,  0,  0,  0,-16,  0,  0,  0,  0,  0,  0,-17
    ];

    /** @const SHIFTS Regular piece shifts. */
    const SHIFTS = [
        self::PAWN => 0,
        self::KNIGHT => 1,
        self::BISHOP => 2,
        self::ROOK => 3,
        self::QUEEN => 4,
        self::KING => 5
    ];

    /** @const FLAGS Response flags. */
    const FLAGS = [
        'NORMAL' => 'n',
        'CAPTURE' => 'c',
        'BIG_PAWN' => 'b',
        'EP_CAPTURE' => 'e',
        'PROMOTION' => 'p',
        'KSIDE_CASTLE' => 'k',
        'QSIDE_CASTLE' => 'q'
    ];

    /** @const BITS Piece bits. */
    const BITS = [
        'NORMAL' => 1,
        'CAPTURE' => 2,
        'BIG_PAWN' => 4,
        'EP_CAPTURE' => 8,
        'PROMOTION' => 16,
        'KSIDE_CASTLE' => 32,
        'QSIDE_CASTLE' => 64
    ];

    /** @const RANK_1 Rank one. */
    const RANK_1 = 7;

    /** @const RANK_2 Rank two. */
    const RANK_2 = 6;

    /** @const RANK_3 Rank three. */
    const RANK_3 = 5;

    /** @const RANK_4 Rank four. */
    const RANK_4 = 4;

    /** @const RANK_5 Rank five. */
    const RANK_5 = 3;

    /** @const RANK_6 Rank six. */
    const RANK_6 = 2;

    /** @const RANK_7 Rank seven. */
    const RANK_7 = 1;

    /** @const RANK_8 Rank eight. */
    const RANK_8 = 0;

    /** @const SQUARES Board squares. */
    const SQUARES = [
        'a8' => 0, 'b8' => 1, 'c8' => 2, 'd8' => 3, 'e8' => 4, 'f8' => 5, 'g8' => 6, 'h8' => 7,
        'a7' => 16, 'b7' => 17, 'c7' => 18, 'd7' => 19, 'e7' => 20, 'f7' => 21, 'g7' => 22, 'h7' => 23,
        'a6' => 32, 'b6' => 33, 'c6' => 34, 'd6' => 35, 'e6' => 36, 'f6' => 37, 'g6' => 38, 'h6' => 39,
        'a5' => 48, 'b5' => 49, 'c5' => 50, 'd5' => 51, 'e5' => 52, 'f5' => 53, 'g5' => 54, 'h5' => 55,
        'a4' => 64, 'b4' => 65, 'c4' => 66, 'd4' => 67, 'e4' => 68, 'f4' => 69, 'g4' => 70, 'h4' => 71,
        'a3' => 80, 'b3' => 81, 'c3' => 82, 'd3' => 83, 'e3' => 84, 'f3' => 85, 'g3' => 86, 'h3' => 87,
        'a2' => 96, 'b2' => 97, 'c2' => 98, 'd2' => 99, 'e2' => 100, 'f2' => 101, 'g2' => 102, 'h2' => 103,
        'a1' => 112, 'b1' => 113, 'c1' => 114, 'd1' => 115, 'e1' => 116, 'f1' => 117, 'g1' => 118, 'h1' => 119
    ];

    /** @const ROOKS Castling bits. */
    const ROOKS = [
        self::WHITE => [['square' => self::SQUARES['a1'], 'flag' => self::BITS['QSIDE_CASTLE']],
                        ['square' => self::SQUARES['h1'], 'flag' => self::BITS['KSIDE_CASTLE']]],
        self::BLACK => [['square' => self::SQUARES['a8'], 'flag' => self::BITS['QSIDE_CASTLE']],
                        ['square' => self::SQUARES['h8'], 'flag' => self::BITS['KSIDE_CASTLE']]]
    ];
}
