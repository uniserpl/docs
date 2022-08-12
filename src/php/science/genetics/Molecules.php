<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Молекулы
 *
 * @author Uniser <uniserpl@gmail.com>
 * @since 2020.06.24
 */
class Molecules {
    
    /**
     * Нуклеотиды
     * 
     * 1 виток = 10 п.н.(пар нуклеотидов) = 3.4 нм
     * в РНК T=>U
     * 
     * пиримидиновые основания: T,C
     * пуриновые основания: A,G (крупнее)
     * 
     * link - водородные связи
     * @var array
     */
    public static $nucleotide = [
        'T' => ['name'=>['ru'=>'Тимин'  ,'ru_char'=>'Т'],'opp'=>'A','link'=>'OH'],
        'C' => ['name'=>['ru'=>'Цитозин','ru_char'=>'Ц'],'opp'=>'G','link'=>'HNO'],
        'A' => ['name'=>['ru'=>'Аденин' ,'ru_char'=>'А'],'opp'=>'T','link'=>'HN'],
        'G' => ['name'=>['ru'=>'Гуанин' ,'ru_char'=>'Г'],'opp'=>'C','link'=>'OHH'],
    ];
    
    /**
     * Аминокислоты
     * 
     * В тканях и клетках встречается свыше 170 различных аминокислот, но обычными
     *    компонентами белков можно считать лишь 20 из них
     * 
     * ind - незаменимые
     * type
     *   B - гидрофобные (внутрь белка)
     *   F - гидрофильные (на поверхности)
     *   Q - м.б. и внутри и снаружи белка
     *     QP - полярный (Тирозин) может образовывать водородные связи
     *     QN - неполярный (Триптофан)
     * 
     * Содержат серу: Мет(M)-S-CH3, Цис(C)-S-H
     * Циклические структуры: Фен,Тир
     * Необычная циклическая структура: Про
     * 
     * Между осно́вными и кислыми аминокислотами в белке могут образоваться ионные связи:
     *   Осно́вные (более одной аминогруппы -NH2): Арг,Гис,Лиз
     *   Кислые (более одной карбоксильной группы -COOH): Асп, Глу
     *   Остальные нейтральные
     * 
     * Незаменимые для детей: Арг,Гис
     * 
     * @var array
     */
    public static $aminoacid = [
        'A'=> ['abbr'=>['en'=>'Ala','ru'=>'Ала'],'type'=>'B' ,'ind'=>0,'name'=>['ru'=>'Аланин'     ,'en'=>'']],
        'R'=> ['abbr'=>['en'=>'Arg','ru'=>'Арг'],'type'=>'F' ,'ind'=>0,'name'=>['ru'=>'Аргинин'    ,'en'=>'']],
        'N'=> ['abbr'=>['en'=>'Asn','ru'=>'Асн'],'type'=>'F' ,'ind'=>0,'name'=>['ru'=>'Аспарагин'  ,'en'=>'']],
        'D'=> ['abbr'=>['en'=>'Asp','ru'=>'Асп'],'type'=>'F' ,'ind'=>0,'name'=>['ru'=>'Аспарагиновая кислота','en'=>'']],
        'V'=> ['abbr'=>['en'=>'Val','ru'=>'Вал'],'type'=>'B' ,'ind'=>1,'name'=>['ru'=>'Валин'      ,'en'=>'']],
        'H'=> ['abbr'=>['en'=>'His','ru'=>'Гис'],'type'=>'F' ,'ind'=>0,'name'=>['ru'=>'Гистидин'   ,'en'=>'']],
        'G'=> ['abbr'=>['en'=>'Gly','ru'=>'Гли'],'type'=>'B' ,'ind'=>0,'name'=>['ru'=>'Глицин'     ,'en'=>'']],
        'Q'=> ['abbr'=>['en'=>'Gln','ru'=>'Глн'],'type'=>'F' ,'ind'=>0,'name'=>['ru'=>'Глутамин'   ,'en'=>'']],
        'E'=> ['abbr'=>['en'=>'Glu','ru'=>'Глу'],'type'=>'F' ,'ind'=>0,'name'=>['ru'=>'Глутаминовая кислота','en'=>'']],
        'I'=> ['abbr'=>['en'=>'Ile','ru'=>'Иле'],'type'=>'B' ,'ind'=>1,'name'=>['ru'=>'Изолейцин'  ,'en'=>'']],
        'L'=> ['abbr'=>['en'=>'Leu','ru'=>'Лей'],'type'=>'B' ,'ind'=>1,'name'=>['ru'=>'Лейцин'     ,'en'=>'']],
        'K'=> ['abbr'=>['en'=>'Lys','ru'=>'Лиз'],'type'=>'F' ,'ind'=>1,'name'=>['ru'=>'Лизин'      ,'en'=>'']],
        'M'=> ['abbr'=>['en'=>'Met','ru'=>'Мет'],'type'=>'B' ,'ind'=>1,'name'=>['ru'=>'Метионин'   ,'en'=>'']],
        'P'=> ['abbr'=>['en'=>'Pro','ru'=>'Про'],'type'=>'B' ,'ind'=>0,'name'=>['ru'=>'Пролин'     ,'en'=>'']],
        'S'=> ['abbr'=>['en'=>'Ser','ru'=>'Сер'],'type'=>'F' ,'ind'=>0,'name'=>['ru'=>'Серин'      ,'en'=>'']],
        'Y'=> ['abbr'=>['en'=>'Tyr','ru'=>'Тир'],'type'=>'QP','ind'=>0,'name'=>['ru'=>'Тирозин'    ,'en'=>'']],
        'T'=> ['abbr'=>['en'=>'Thr','ru'=>'Тре'],'type'=>'F' ,'ind'=>1,'name'=>['ru'=>'Треонин'    ,'en'=>'']],
        'W'=> ['abbr'=>['en'=>'Trp','ru'=>'Три'],'type'=>'QN','ind'=>1,'name'=>['ru'=>'Триптофан'  ,'en'=>'']],
        'F'=> ['abbr'=>['en'=>'Phe','ru'=>'Фен'],'type'=>'B' ,'ind'=>1,'name'=>['ru'=>'Фенилаланин','en'=>'']],
        'C'=> ['abbr'=>['en'=>'Cys','ru'=>'Цис'],'type'=>'B' ,'ind'=>0,'name'=>['ru'=>'Цистеин'    ,'en'=>'']],
    ];
    
    /**
     * Кодоны (триплёты)
     * 
     * т.3 стр.169
     * 
     * @var array
     */
    public static $codons = [
        'UUU'=>'F', 'UCU'=>'S', 'UAU'=>'Y', 'UGU'=>'C', 
        'UUC'=>'F', 'UCC'=>'S', 'UAC'=>'Y', 'UGC'=>'C', 
        'UUA'=>'L', 'UCA'=>'S', 'UAA'=>'.', 'UGA'=>'.', 
        'UUG'=>'L', 'UCG'=>'S', 'UAG'=>'.', 'UGG'=>'W', 
        
        'CUU'=>'L', 'CCU'=>'P', 'CAU'=>'H', 'CGU'=>'R', 
        'CUC'=>'L', 'CCC'=>'P', 'CAC'=>'H', 'CGC'=>'R', 
        'CUA'=>'L', 'CCA'=>'P', 'CAA'=>'Q', 'CGA'=>'R', 
        'CUG'=>'L', 'CCG'=>'P', 'CAG'=>'Q', 'CGG'=>'R', 
        
        'AUU'=>'I', 'ACU'=>'T', 'AAU'=>'N', 'AGU'=>'S', 
        'AUC'=>'I', 'ACC'=>'T', 'AAC'=>'N', 'AGC'=>'S', 
        'AUA'=>'I', 'ACA'=>'T', 'AAA'=>'K', 'AGA'=>'R', 
        'AUG'=>'M', 'ACG'=>'T', 'AAG'=>'K', 'AGG'=>'R', 
        
        'GUU'=>'V', 'GCU'=>'A', 'GAU'=>'D', 'GGU'=>'G', 
        'GUC'=>'V', 'GCC'=>'A', 'GAC'=>'D', 'GGC'=>'G', 
        'GUA'=>'V', 'GCA'=>'A', 'GAA'=>'E', 'GGA'=>'G', 
        'GUG'=>'V', 'GCG'=>'A', 'GAG'=>'E', 'GGG'=>'G', 
        
    ];
    
    /**
     * Инсулин состоит из двух полипептидных цепей
     * Первичная структура
     * Скобками обозначены соединения -S-S- между аминокислотами
     */
    public static $insulin = 'GIVEEC{C<ASVC}SLYELENYC{N+FVNEHLC>GSHLVEALYLVC}GERGFFYTPKA';
    
    /**
     * Лизоцим - фермент, катализирующий разрушение клеточных стенок бактерий
     * Обнаружен во многих тканях и секретах человеческого тела, в растениях и яичном белке
     * 
     * Одна полипептидная цепь из 129 аминокислотных остатков H2N-1-...-129-COOH
     * Первичная структура
     * 
     * @var string
     */
    public static $lysozyme = 'KVFGRC<ELAAAMKRHGLDNYRGYSLGNWVC{AAKFESNFNTQATNRNTDGSTDYGILQINSRWWC[NGDRTPGSRNLC(NIPC]SALLSSDITASVNC)AKKIVSDGDGMNAWVAWRNRC}KGTDVQAWIRGC>RL';
    
    /**
     * Миоглобин синтезируется в мышцах, где он запасает кислород
     * 
     * @var string 
     */
    public static $myoglobin = '';
    
    
}
